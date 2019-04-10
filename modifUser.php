<?php

	include("auth/EtreAuthentifie.php");
	try {
		$SQL = "UPDATE users SET mdp = ? WHERE uid = ?";
		$stmt = $db->prepare($SQL);
		$res = $stmt->execute(array(
			$mdp,
			$_POST['uid']
		));
		redirect("listeUsers.php");
		} 
		catch (\PDOException $e) {
		http_response_code(500);
		echo "Erreur de serveur.";
		exit();
}