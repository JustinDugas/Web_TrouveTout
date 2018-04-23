<?php
	require_once("action/registerAction.php");
	
	$action = new RegisterAction();
	$action->execute();

	require_once("partial/header.php");
?>
<body>
		<form id="loginRegister" action="">
			<div id="prenomRegister">Prénom: 
				<input id="txt" type="text" name="prenom">
			</div><br>

			<div id="nomRegister">Nom: 
				<input id="txt" type="text" name="nom">
			</div><br>

			<div id="ageRegister">Age: 
				<select name="age">
					<script>
						for(let i = 1; i<131; i++){
							document.write("<option>" + i + "</option>");
						}
					</script>
				</select>
			</div><br>

			<div id="sexeRegister">Sexe: 
				<div id="entree">
					<label><input type="radio" name="sexe" value="Homme"> Homme</label>
					<label><input type="radio" name="sexe" value="Femme"> Femme</label>
				</div>
			</div><br>

			<div id="emailRegister">Courriel: 
				<input id="txt" type="text" name="courriel">
			</div><br>

			<div id="pwdRegister">Mot de passe: 
				<input id="txt" type="text" name="mdp">
			</div><br>
			<div id="pwdConfirm">Confirmation:  
				<input id="txt" type="text" name="mdpconfirm">
			</div><br>

			<input id="btnCreerCompte" type="submit" value="Créer mon compte">	
		</form>
</body>
<?php
		require_once("partial/footer.php");
