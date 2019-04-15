<?php
	require("auth/EtreAuthentifie.php");
	include("header.php");
?>
<?php 
	if ($idm->getrole() == "admin") {
?>
	<table class="table table-responsive table-hover">
		<tr>
			<th>Uid</th>
			<th>Login</th>
		</tr>
<?php
		$requete = $db->query("SELECT * FROM users");
		while ($data = $requete->fetch()) {
?>
		<tr>
			<td><?php echo $data['uid']; ?></td>
			<td><?php echo $data['login']; ?></td>
			<td><?php echo '<a href="modifUser_form.php?uid=' . $data['uid'] . '">' . 'Modifier mdp' . '</a>'; ?></td>
			<td><?php echo '<a href="deleteUser.php?uid=' . $data['uid'] . '">' . 'Supprimer utilisateur' . '</a>'; ?></td>
			<td><?php echo '<a href="association_form.php?uid=' . $data['uid'] . '">' . 'Associer à un enseignant' . '</a>'; ?></td>
		</tr>
<?php
	}
include("footer.php");
?>
	</table>
<?php
	$requete->closecursor();
?>
<p><a href="ajoutUser_form.php">Ajouter un utilisateur</a></p>
<?php
include("footer.php");	
	}

	else if($idm->getrole() == "user")
	{
?>
		<table class="table table-responsive table-hover">
			<tr>
				<th>Uid</th>
				<th>Login</th>
			</tr>
<?php
			$requete = $db->query('SELECT * FROM users WHERE uid = ' . $idm->getUid());
			while($data = $requete->fetch())
			{
?>
				<tr>
					<td><?php echo $data['uid']; ?></td>
					<td><?php echo $data['login']; ?></td>
					<td><?php echo '<a href="modifUser_form.php?uid=' . $data['uid'] . '">' . 'Modifier mdp' . '</a>'; ?></td>
				</tr>
<?php 
			}
?>
		</table>
<?php
		$requete->closecursor();
	}
include("footer.php");
?>
