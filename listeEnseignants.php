<?php
	require("auth/EtreAuthentifie.php");
	include("header.php");
?>

<table class="table table-responsive table-hover">
      <tr>
        <th>Eid</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Année</th>
      </tr>
<?php
      $requete = $db->query("SELECT * FROM enseignants");
      while ($data = $requete->fetch()) {
?>
      <tr>
        <td><?php echo $data['eid']; ?></td>
        <td><?php echo $data['nom']; ?></td>
        <td><?php echo $data['prenom']; ?></td>
        <td><?php echo $data['tel']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['annee']; ?></td>
      </tr>
<?php
    }
?>
</table>