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
	<p><a href="listeGroupes.php">Liste des groupes</a></p>
	<p><a href="listeGtypes.php">Liste des gtypes</a></p>
	<p><a href="listeAffectations.php">Liste des affectations</a></p>
<?php
}
else if ($idm->getrole() == "user") {

?>
	<p><a href="listeUsers.php">Consulter les informations de l'utilisateur</a></p>
	<p><a href="listeEnseignants.php">Consulter les informations de l'enseignant</a></p>
	<p><a href="listeModules.php">Consulter les modules de l'enseignant</a></p>
	<p><a href="listeModules.php">Consulter les groupes de l'enseignant</a></p>

<?php
}
include("footer.php");