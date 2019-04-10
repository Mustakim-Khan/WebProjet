<?php
include("auth/EtreAuthentifie.php");
	try {
	$SQL = "UPDATE enseignants SET uid = ? WHERE eid = ?";
	$stmt = $db->prepare($SQL);
	$res = $stmt->execute(array(
		$_POST['userUid'],
		$_POST['profUid'],
	));
	redirect("listeUsers.php");
	} 
	catch (\PDOException $e) {
	http_response_code(500);
	echo "Erreur de serveur.";
	exit();
	}
?>