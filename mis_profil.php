<?php
session_start();
$serveur = "localhost";
$login = "root";
$pass = "";

function securisation($donnees){
           $donnees=strip_tags($donnees);
           $donnes=stripslashes($donnees);
           $donnees=trim($donnees);
           $donnees=htmlspecialchars($donnees);
           return $donnees;
}

try{
	$bdd = new PDO("mysql:host=$serveur;dbname=etudiant;charset=utf8",$login,$pass);
	$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(isset($_SESSION['id']))
	{
		$requete_user = $bdd -> prepare("
		SELECT * FROM membres WHERE id = ?");
		$requete_user -> execute(array($_SESSION['id']));
		$info_user = $requete_user -> fetch();

		if(isset($_POST['validenvoi'])){
			$motdepasse = sha1($_POST['new_password']);

		if(isset($_POST['new_password']) AND !empty($_POST['new_password'])){
			if($motdepasse != $info_user['password']){
				$message = "Mdp différent";
			}else{
				if(isset($_POST['new_pseudo']) AND !empty($_POST['new_pseudo'])){
				$new_pseudo = securisation($_POST['new_pseudo']);
				$modifiepseudo = "UPDATE membres SET pseudo = ? WHERE id = ?";
				$requete_user = $bdd -> prepare($modifiepseudo);
				$requete_user -> execute(array($new_pseudo, $_SESSION['id']));
				$new_passwordconfirm = sha1($_POST['new_passwordconfirm']);
				$modifiepass = "UPDATE membres SET password = ? WHERE id = ?";
				$requete_user = $bdd -> prepare($modifiepass);
				$requete_user -> execute(array($new_passwordconfirm, $_SESSION['id']));	
				if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])){
			$tailleMax = 2097152;
			$extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
			if($_FILES['avatar']['size'] <= $tailleMax){
				$extensionTelechargees = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1)); 
				if(in_array($extensionTelechargees, $extensionsValides)){
					$chemin = "membres/avatars/".$_SESSION['id'].".".$extensionTelechargees;
					$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
					if($resultat){
						$updateavatar = $bdd -> prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
						$updateavatar -> execute(array(
							'avatar' => $_SESSION['id'].".".$extensionTelechargees,
							'id' => $_SESSION['id']
							));
						header('Location:ecobiblio.php?id='.$_SESSION['id']);
					}else{
						$message = "Il y a erreur lors du téléchargement de votre photo de profil.";
					}
				}else{
					$message = "La photo de profil doit être au format jpg, jpeg, gif ou png";
				}

			}else{
				$message = "La taille de l'image ne doit pas dépasser 2Mo";
			}
		}	
				header("Location:ecobiblio.php?id=".$_SESSION['id']);
				}
				}	
				}
			}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mis à jour profil</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="bt/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="bt/jquery.bxslider/jquery.bxslider.css"/>
    <link href="build/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="ecobilio.css"/>
</head>
<body>
	<h1 style="margin-left: 2%">METTRE A JOUR VOTRE PROFIL</h1>

	<form class="form col-lg-4 well" method="POST" action="" enctype="multipart/form-data" style="width: 25%; margin-top: 1%; margin-left: 4%;">
		<fieldset>
			<legend style="color: blue"><b><i>INFORMATIONS</i></b></legend>

			<div class="form-group">
				<label for="pass"></label>
				<input type="password" name="new_password" id="pass" placeholder="Mot de passe actuel" maxlength="25" class="form-control champ"/>
			</div>
			<div>	
				<label for="mdp"></label>
				<input type="password" name="new_passwordconfirm" id="motp" maxlength="25" placeholder="Nouveau mot de passe" class="form-control"/>
			</div><br/>
			<div class="form-group">
				<label for="pseudo"></label>
				<input type="pseudo" name="new_pseudo" placeholder="nouveau pseudo" class="form-control"/>
			</div>
			<div form-group>
				<label style="color: blue">Photo de profil: </label><input type="file" name="avatar" class=" form-control"/><br/>
			</div>

			<button type="reset" value="Annuler" class="btn btn-primary pullriht">Annuler</button>
			<button type="submit" value="Envoi" class="btn btn-primary pullriht" style="float: right; " name="validenvoi"> Valider</button>
		</fieldset>
			<?php
				if(isset($message)){ echo '<h4 style="color: red;">'.$message. '</h4>'; }
			?>
	</form>

</body>
</html>

<?php
}
}catch(PDOException $e){
	echo 'Echec de la connexion à la base. '. $e -> getMessage();
}
?>