<?php
	require("auth/EtreAuthentifie.php");
	include("header.php");
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Projet 5</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../home.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= $pathFor['logout'] ?>" title="Logout"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
    </ul>
  </div>
</nav>
<form action="association.php" method="post">
  <table class="table table-responsive table-hover">
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Année</th>
      </tr>
<?php
      $requete = $db->query("SELECT * FROM enseignants");
      while ($data = $requete->fetch()) {
?>
      <tr>
       
        <td><?php echo $data['nom']; ?></td>
        <td><?php echo $data['prenom']; ?></td>
        <td><?php echo $data['annee']; ?></td>
        <td><input type="radio" name="profUid" value=<?php echo $data['eid'];?>></td>
        <input type="hidden" name="userUid" value=<?php echo $_GET['uid']; ?>>
        <input type="hidden" name="annee" value=<?php echo $data['annee']; ?>>
      </tr>
<?php
    }
?>
  </table>
  <input type="submit" name="submit" value="Valider">
</form>