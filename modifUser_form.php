<?php
	require("auth/EtreAuthentifie.php");
	include("header.php");
	

	if (isset($_GET['uid']))
	{
?>
		
		<div class="center">
		    <h1>Modification</h1>
		    <form action="modifUser.php" method="post">
		        <table>
                    <tr>
                        <td><label for="inputMDP" class="control-label">MDP</label></td>
                            <td><input type="password" name="mdp" class="form-control" id="inputMDP" placeholder="Mot de passe" required value=""></td>
                    </tr>
                    <tr>
                        <td><label for="inputMDP2" class="control-label">Répéter MDP</label></td>
                            <td><input type="password" name="mdp2" class="form-control" id="inputMDP" placeholder="Répéter le mot de passe" required value=""></td>
                    </tr>
                    <tr>
                    	<td><input type="hidden" name="uid" value=<?php echo $_GET['uid']; ?>></td>
                    </tr>
		        </table>
                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
		    </form>
		</div>
<?php
	}
	include("footer.php");
?>