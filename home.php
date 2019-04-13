<?php
require("auth/EtreAuthentifie.php");
$title = 'Accueil';
include("header.php");


echo "Hello " . $idm->getIdentity().". Your uid is: ". $idm->getUid() .". Your role is: ".$idm->getRole();
//echo "Escaped values: ".$e_($ci->idm->getIdentity());
if ($idm->getrole() == "admin") {

?>
	<p><a href="listeUsers.php">Liste des users</a></p>
	<p><a href="listeEnseignants.php">Liste des enseignants</a></p>
	<p><a href="listeModules.php">Liste des modules</a></p>
<?php
}
else if ($idm->getrole() == "user") {

?>
	<p><a href="listeUsers.php">Consulter informations d'utilisateur</a></p>
	<p><a href="listeEnseignants.php">Consulter informations d'enseignant</a></p>
	<p><a href="listeModules.php">Consulter modules d'enseignant</a></p>
<?php
}
include("footer.php");