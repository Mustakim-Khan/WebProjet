<?php
require("auth/EtreAuthentifie.php");
$title="Ajout de l'utilisateur";
include("header.php");
?>


<p class="error"><?= $error??""?></p>
<div class="center">
    <h1>Inscription</h1>
    <form method="post">
                    <!--legend>Inscription</legend-->
        <table>
                    <tr>
                        <td><label for="inputNom" class="control-label">Nom</label></td>
                         <td><input type="text" name="nom" class="form-control" id="inputNom" placeholder="Nom" required value="<?= $data['nom']??""?>">
                         </td>
                    </tr>
                    <tr>
                       <td> <label for="inputPrenom" class="control-label">Prénom</label></td>
                          <td>  <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prénom" required aria-required="true" value="<?= $data['prenom']??""?>"></td>
                    </tr>
                    <tr>
                        <td><label for="inputLogin" class="control-label">Email</label></td>
                            <td><input type="email" name="mail" class="form-control" id="inputMail" placeholder="Email" required value="<?= $data['mail']??""?>"></td>
                    </tr>
                    <tr>
                        <td><label for="inputMDP" class="control-label">MDP</label></td>
                            <td><input type="number" name="tel" class="form-control" id="inputTel" placeholder="Telephone" required value=""></td>
                    </tr>
                    <tr>
                        <td><label for="inputMDP2" class="control-label">Répéter MDP</label></td>
                            <td><input type="number" name="annee" class="form-control" id="inputAnnee" placeholder="Année" required value=""></td>
                    </tr>
        </table>
                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
    </form>
    </div>
<?php

include("footer.php");
