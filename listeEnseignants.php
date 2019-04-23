<?php
	require("auth/EtreAuthentifie.php");
	include("header.php");
if ($idm->getrole() == "admin") {
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
        <td><?php echo '<a href="modifEnseignant_form.php?eid=' . $data['eid'] . '&annee=' . $data['annee'] .'&uid='. $data['uid'] . '">' . 'Modifier enseignant' . '</a>'; ?></td>
        <td><?php echo '<a href="deleteEnseignant.php?eid=' . $data['eid'] . '&annee=' . $data['annee'] .'&uid='. $data['uid'] . '">' . 'Supprimer enseignant' . '</a>'; ?></td>
        <td><?php echo '<a href="tabDeBord_Enseignant.php?eid=' . $data['eid'] . '">' . 'Afficher cours' . '</a>'; ?></td>
      </tr>
<?php
    }
?>
</table>
<p><a href="ajoutEnseignant_form.php">Ajouter un enseignant</a></p>

<?php
include("footer.php");
} else if($idm->getrole() == "user")
{
?>
    <table class="table table-responsive table-hover">
      <tr>
        <th>Eid</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Annee</th>
      </tr>
<?php
      $requete = $db->query('SELECT * FROM enseignants WHERE uid = ' . $idm->getUid());
      while($data = $requete->fetch())
      {
?>
        <tr>
          <td><?php echo $data['eid']; ?></td>
          <td><?php echo $data['nom']; ?></td>
          <td><?php echo $data['prenom']; ?></td>
          <td><?php echo $data['tel']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td><?php echo $data['annee']; ?></td>
          <td><?php echo '<a href="modifEnseignant_form.php?eid=' . $data['eid'] . '&annee=' . $data['annee'] .'&uid='. $data['uid'] . '">' . 'Modifier enseignant' . '</a>'; ?></td>
          <td><?php echo '<a href="tabDeBord_Enseignant.php?eid=' . $data['eid'] . '">' . 'Tableau de bord' . '</a>'; ?></td>
        </tr>
<?php 
      }
?>
      </table>
<?php
    $requete->closecursor();
include("footer.php");
  }
?>