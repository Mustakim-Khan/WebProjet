<?php
require("auth/EtreAuthentifie.php");
$title = 'Accueil';
include("header.php");


echo "Hello " . $idm->getIdentity().". Your uid is: ". $idm->getUid() .". Your role is: ".$idm->getRole();
//echo "Escaped values: ".$e_($ci->idm->getIdentity());
if ($idm->getrole() == "admin") {

?>
	<p><a href="listeUsers.php">Consulter liste des users</a></p>
<?php
}
else{
?>
	<p><a href="listeUsers.php">Consulter informations de l'utilisateur</a></p>
<?php
}
include("footer.php");