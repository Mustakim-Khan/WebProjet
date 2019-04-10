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
			$id = $data['uid'];
?>
		<tr>
			<td><?php echo $data['uid']; ?></td>
			<td><?php echo $data['login']; ?></td>
			<td><?php echo '<a href="modifUser_form.php?uid=' . $data['uid'] . '">' . 'Modifier mdp' . '</a>'; ?></td>
<!--
	!!!! MARCHE PAS !!!!

			<td><a href="#" data-toggle="modal" data-target="#myModal">Supprimer Utilisateur</a></td>
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

				  <div class="modal-content">
				    <div class="modal-header">
				      <button type="button" class="close" data-dismiss="modal">&times;</button>
				      <h4 class="modal-title">Etes-vous sûr de vouloir supprimer cet utilisateur ?</h4>
				    </div>
				    <div class="modal-body">
				    	<?php/* echo '<a type="button" class="btn btn-default" href="deleteUser.php?uid= ' . $id . '">' . 'Ouais' . '</a>'; */?> 
				    	<button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
				    </div>
				    <div class="modal-footer">
				      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				    </div>
				  </div>
				  
				</div>
			</div>
-->			
				<td><?php echo '<a href="deleteUser.php?uid=' . $data['uid'] . '">' . 'Supprimer utilisateur' . '</a>'; ?></td>
				<td><?php echo '<a href="association_form.php?uid=' . $data['uid'] . '">' . 'Associer à un enseignant' . '</a>'; ?></td>
		</tr>
<?php
	}
?>
	</table>
<?php
	$requete->closecursor();
?>
<p><a href="ajoutUser_form.php">Ajouter un utilisateur</a></p>
<p><a href="listeEnseignants.php">Liste des enseignants</a></p>
<?php	
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
			$data = $requete->fetch();
?>
			<tr>
				<td><?php echo $data['uid']; ?></td>
				<td><?php echo $data['login']; ?></td>
				<td><?php echo '<a href="modifUser_form.php?uid=' . $data['uid'] . '">' . 'Modifier mdp' . '</a>'; ?></td>
			</tr>
		</table>
<?php 
		$requete->closecursor();
	}
?>
