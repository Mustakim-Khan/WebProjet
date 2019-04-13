<?php
include("auth/EtreAuthentifie.php");
if ($idm->getrole() == "admin") 
{
    $SQL = "SELECT annee FROM enseignants WHERE nom = ? AND prenom = ?";
    $stmt = $db->prepare($SQL);
    $stmt->execute(array(
      $_POST['nom'],
      $_POST['prenom']
    ));
    $data = $stmt->fetch();
    if ($data['annee'] == date("Y")) {
      $error .= "Enseignant déjà existant";
    }

    if (!empty($error)) {
        redirect('ajoutEnseignant_form.php');
        exit();
    }

  try {
    $SQL = "INSERT INTO enseignants(uid, nom, prenom ,email, tel, annee, etid) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($SQL);
    
    echo "<br> ici <br>";
    $stmt->execute(array(
      htmlspecialchars($_POST['uid']),
      htmlspecialchars($_POST['nom']),
      htmlspecialchars($_POST['prenom']),
      htmlspecialchars($_POST['email']),
      htmlspecialchars($_POST['tel']),
      date("Y"),
      htmlspecialchars($_POST['etid'])
    ));
    redirect("listeEnseignants.php");
  } catch (\PDOException $e) {
    http_response_code(500);
    echo "Erreur de serveur.";
    exit();
  }
};