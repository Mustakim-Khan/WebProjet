<?php

include("auth/EtreAuthentifie.php");
if ($idm->getrole() == "admin") 
{
     if (empty($_POST['login'])) {
      include('ajoutUser_form.php');
      exit();
  }

  $error = "";

  foreach (['login', 'mdp', 'mdp2'] as $name) {
      if (empty($_POST[$name])) {
          $error .= "La valeur du champs '$name' ne doit pas être vide";
      } else {
          $data[$name] = $_POST[$name];
      }
  }


  // Vérification si l'utilisateur existe
  $SQL = "SELECT uid FROM users WHERE login=?";
  $stmt = $db->prepare($SQL);
  $res = $stmt->execute([htmlspecialchars($data['login'])]);

  if ($res && $stmt->fetch()) {
      $error .= "Login déjà utilisé";
  }

  if ($data['mdp'] != $data['mdp2']) {
      $error .="MDP ne correspondent pas";
  }

  if (!empty($error)) {
      redirect('ajoutUser_form.php');
      exit();
  }


  foreach (['login', 'mdp'] as $name) {
      $clearData[$name] = $data[$name];
  }

  $passwordFunction =
      function ($s) {
          return password_hash($s, PASSWORD_DEFAULT);
      };

  $clearData['mdp'] = $passwordFunction($data['mdp']);
  try {
    $SQL = "INSERT INTO users(login,mdp) VALUES (:login,:mdp)";
    $stmt = $db->prepare($SQL);
    $res = $stmt->execute($clearData);
    redirect("listeUsers.php");
  } catch (\PDOException $e) {
    http_response_code(500);
    echo "Erreur de serveur.";
    exit();
  }
};