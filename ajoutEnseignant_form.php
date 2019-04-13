<?php
require("auth/EtreAuthentifie.php");
$title="Ajout de l'utilisateur";
include("header.php");
?>


<p class="error"><?= $error??""?></p>
<div class="center">
    <h1>Inscription</h1>
    <form action="ajoutEnseignant.php" method="post" id="ens">
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
                            <td><input type="email" name="email" class="form-control" id="inputMail" placeholder="Email" required value="<?= $data['mail']??""?>"></td>
                    </tr>
                    <tr>
                        <td><label class="control-label">Telephone</label></td>
                            <td><input max="99999999999999" type="number" name="tel" class="form-control" id="inputTel" placeholder="Telephone" required value=""></td>
                    </tr>
                    <tr>
                        <td><label class="control-label">Associer à l'utilisateur :</label></td>
                            <td>
                                <select class="form-control" required name="uid" form="ens">
                                    <?php $requete = $db->query("SELECT * FROM users WHERE role != 'admin'"); ?>
                                    <option></option>
<?php
                                while($data = $requete->fetch())
                                {
?>
                                    <option value="<?php echo $data['uid']; ?>"><?php echo $data['login']; ?></option>
<?php
                                }
?>
                                </select>

                            </td>
                    </tr>
                     <tr>
                        <td><label class="control-label">Type de professeur :</label></td>
                            <td>
                                <select class="form-control" required name="etid" form="ens">
                                    <?php $requete = $db->query("SELECT * FROM etypes"); ?>
                                    <option></option>
<?php
                                while($data = $requete->fetch())
                                {
?>
                                    <option value="<?php echo $data['etid']; ?>"><?php echo $data['nom']; ?></option>
<?php
                                }
?>
                                </select>

                            </td>
                    </tr>
                    
        </table>
                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
    </form>
    </div>
<?php

include("footer.php");