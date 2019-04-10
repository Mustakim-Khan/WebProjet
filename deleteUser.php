<?php


  include("auth/EtreAuthentifie.php");
  try {
    $SQL = "DELETE FROM users WHERE uid = ?";
    $stmt = $db->prepare($SQL);
    $res = $stmt->execute(array(
    	$_GET['uid']
    ));
    redirect("listeUsers.php");
  } catch (\PDOException $e) {
    http_response_code(500);
    echo "Erreur de serveur.";
    exit();
  };