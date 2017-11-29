<?php
$bd=new PDO('mysql:host=localhost;dbname=etudiant;charset=utf8','root','');
function securisation($donnees){
           $donnees=strip_tags($donnees);
           $donnes=stripslashes($donnees);
           $donnees=trim($donnees);
           $donnees=htmlspecialchars($donnees);
           return $donnees;
}
   if(isset($_POST['validenvoi']))
   {

   	  $sexe=$_POST['sexe'];
      $prenom=securisation($_POST['prenom']);
      $nom=securisation($_POST['nom']);
      $email=securisation($_POST['email']);
      $pseudo=securisation($_POST['pseudo']);
      $password=sha1($_POST['password']);
      $passwordconfirm=sha1($_POST['passwordconfirm']);
   	if (!empty($_POST['prenom'])AND !empty($_POST['prenom'])AND !empty($_POST['nom'])AND !empty($_POST['email']) AND !empty($_POST['pseudo'])AND !empty($_POST['password']) AND !empty($_POST['passwordconfirm'])AND !empty($_POST['sexe'])){
                $reqmail=$bd->prepare("SELECT * FROM membres WHERE email= ?");
                $reqmail->execute(array($email));
                $reqmailexist=$reqmail->rowcount();
                if ($reqmailexist==0) {
                  $reqpseudo=$bd->prepare('SELECT * FROM membres WHERE pseudo= ?');
                  $reqpseudo->execute(array($pseudo));
                $pseudoexist=$reqpseudo->rowcount();
                 if ($pseudoexist==0) {
              if($password== $passwordconfirm){
                    $req=$bd->prepare("INSERT INTO membres(prenom, nom, email,pseudo, password, sexe)
                    					VALUES(?, ?, ?, ?, ?, ?)"
                    					);
                    $req -> execute(array($prenom, $nom, $email, $pseudo,$password, $sexe));

                    $_SESSION['bienvenu']="Vous etes bien inscrit";
                    $erreur = "Vous etes bien inscrit.";



     }
     else{
     	$erreur="les mots de passes ne sont pas identiques";
     }
 }else{$erreur="ce pseudo existe deja";}
 }else{$erreur="cet email existe déja";}
   	}
   else{
   	$erreur="tous les champs ne sont pas remplis";
   }
}

?>

<?php
session_start();

	$serveur = "localhost";
	$login = "root";
	$pass = "";
	$erreur2 = "";


	try{
		$bdd = new PDO("mysql:host=$serveur;dbname=etudiant;charset=utf8",$login,$pass);
		$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if(isset($_POST['envoi_connexion'])){
			$pseudo = securisation($_POST['pseudo']);
			$password = sha1($_POST['password']);

			if(!empty($pseudo) AND !empty($password)){
				$selection = "SELECT * FROM membres WHERE pseudo = ? AND password = ?";
				$requete_user = $bdd -> prepare($selection);
				$requete_user -> execute(array($pseudo, $password));
				$user_exist = $requete_user -> rowCount();
				if($user_exist == 1){
					$info_user = $requete_user -> fetch();
					$_SESSION['id'] = $info_user['id'];
					$_SESSION['pseudo'] = $info_user['pseudo'];
					$_SESSION['email'] = $info_user['email'];
					header("Location: ecobiblio.php?id=".$_SESSION['id']);
				}else{
					$erreur2 = "Mauvais pseudo ou mot de passe.";
				}
			}else{
				$erreur2 = "Les champs ne doivent pas être vides";
			}
		}
		
	}
	catch(PDOException $e){
		echo 'Echec de la connexion à la base de données.' .$e -> getMessage();
	}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1"/>
  	<link rel="stylesheet" type="text/css" href="bt/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="bt/jquery.bxslider/jquery.bxslider.css"/>
	<link rel="stylesheet" type="text/css" href="ecobilio.css"/>
    <link href="build/css/custom.css" rel="stylesheet">
</head>
<body style="background: url(images/photo.jpg);">
<div class="container-fluid" style="background: DodgerBlue;margin-right: 1%; width: 100%">
<img src="logo/logo.png" width="10%" style="margin-top: 1%">
<div class="row" style="float: right;">
	<form class="form-inline" method="POST" action="" style="margin-top: 3%">
		<fieldset>
			<div class="form-group">
				<label for="pseudo">Pseudo :</label><br/>
				<input style="margin-left: -4%" type="pseudo" required name="pseudo" placeholder="pseudo" class="form-control champ"/>
			</div>
			<div class="form-group">
				<label for="pass">Mot de passe :</label><br/>
				<input type="password" name="password" required placeholder="Mot de passe" maxlength="25" class="form-control"/>
				
			</div>
			<div class="form-group">
			<button type="submit" style="margin-left: 3em; margin-top: 12%" value="envoi" class="btn btn-primary pullriht" name="envoi_connexion"> Se connecter</button>
			</div>
			
		</fieldset>
		  <?php
		  	if(isset($erreur2)){
		  		echo '<h4 style="color: red";>'.$erreur2.'</h4>';
		  	} 
		  ?>
	</form>
	</div>
</div>
											<div class="container-fluid" style="margin-top: 0%">
	<div class="row">
	<div id="erreur">    

	</div>
	<form class="form col-lg-4 well" method="POST" action="" style="width: 25%; margin-top: 1%; margin-left: 4%;">
		<fieldset>
			<legend style="color: DodgerBlue"><b><i>INSCRIPTION</i></b></legend>
			<div class="form-group">
				<label for="prenom"></label>
				<input type="text" name="prenom" placeholder="Prénom" class="form-control champ"/>
			</div>
			<div class="form-group">
				<label for="nom"></label>
				<input type="text" name="nom" id="nom" placeholder="Nom" class="form-control champ"/>
			</div>
			<div class="form-group">
				<label for="email"></label>
				<input type="email" name="email" id="email" placeholder="Adresse electronique" class="form-control champ"/>
			</div>
			<div class="form-group">
				<label for="pass"></label>
				<input type="password" name="password" id="pass" placeholder="Mot de passe" maxlength="25" class="form-control champ"/>
			</div>
			<div>	
				<label for="mdp"></label>
				<input type="password" name="passwordconfirm" id="motp" maxlength="25" placeholder="Confirmer mot de passe" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="pseudo"></label>
				<input type="pseudo" name="pseudo" placeholder="pseudo" class="form-control"/>
			</div>
			<div class="radio">
				<label style="color: DodgerBlue"><input type="radio" name="sexe" value="Masculin"/ ><b><i> Masculin</i></b></label>
			</div>
			<div class="radio" >
				<label style="color: DodgerBlue"><input type="radio" checked="checked" name="sexe" value="Feminin"  /><b><i> Féminin</i></b></label>
			</div>
			<button type="reset" value="Annuler" class="btn btn-primary pullriht">Annuler</button>
			<button type="submit" value="Envoi" class="btn btn-primary pullriht" style="float: right; " name="validenvoi"> S'inscrire</button>
		</fieldset>

		<?php 
          if (isset($erreur)) {
          	echo '<h4 style="color: blue;">'.$erreur.'</h4>';
          }

	?>
	</form>

        
	<div class="col-lg-4 col-md-4" style="height: auto; width: 68%; margin-top: 1%">
		
              <ul class="images">
                  <li><img src="images/tdsi2.jpg" style="height: 350px" width="100%" /></li>
                  <li><img src="images/tdsi4.jpg" style="height: 350px" width="100%" /></li>
                  <li><img src="images/tdsi5.jpg" style="height: 350px" width="100%" /></li>
                  <li><img src="images/tdsi10.jpg" style="height: 350px" width="100%" /></li>
                  <li><img src="images/tdsi.jpg" style="height: 350px" width="100%" /></li>
              </ul>
           </div>	
</div>
<div  style="margin-left: 30%; margin-top: -280px; margin-right: 1%; color: DodgerBlue; text-align: justify;">
      <p style="font-size: 40px; font-family: 'Monotype Corsiva' ;font-weight:bold" >Ecolibrairie est un site éducatif ouvert à tout élève. Dans écolilbrairie vous trouverez votre programme d'étude. Aussi la possibilité de compléter votre cours à tout moment.
      </p>
</div>
</div>
	<div class="footer well" style="width: 100%; height: auto; background: DodgerBlue; margin-bottom: auto;">
		<img src="logo/logo.png" width="10%" style="margin: 1%;"/>	
		<ul style="color: white; list-style: none; display: inline-block; float: right; margin: 1%">
			<li><span class="glyphicon glyphicon-home"></span> Dakar Sénégal</li>
			<li><span class="glyphicon glyphicon-envelope"></span> ecolibrairie@gmail.com</li>
			<li><span class="glyphicon glyphicon-earphone"></span> +221 77 ...</li>
		</ul>
	</div>

<script src="bt/jquery.min.js"></script>
<script src="bt/jquery.bxslider/jquery.bxslider.js"></script>
<script>
	jQuery(document).ready(function(){
		$('.images').bxSlider({
			auto: true
		});


  
	});
</script>

</body>
</html>

