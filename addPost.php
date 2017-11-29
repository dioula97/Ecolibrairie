<?php 
session_start();
include_once('fonctions/fonction.php');
include_once('fonctions/addSujet.class.php');
$bdd = bdd();
try{
  if (isset($_GET['id']) AND $_GET['id'] > 0){
    $obtenir_id = intval($_GET['id']);
    $requete_user = $bdd -> prepare(
      "SELECT * FROM membres WHERE id = ?"
      );
    $requete_user -> execute(array($obtenir_id));
    $info_user = $requete_user -> fetch();
    if($_SESSION['id'] != $info_user['id']){
      header("Location:s_inscrire.php");
    }
if(isset($_POST['name']) AND isset($_POST['sujet'])){
    	$addSujet = new addSujet($_POST['name'],$_POST['sujet'],$_POST['categorie']); 
    	$verif = $addSujet->verif();
    	if($verif == "Ok"){
    		if($addSujet->insert()){
    			header('Location:integ.php?id='.$info_user['id'].'&sujet='.$_POST['name']);
    		}
    	}else{
    		$erreur = $verif;
    	}
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cours sixieme</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="bt/css/bootstrap.css"/>
  <title>Ecolibrairie</title>
     <meta charset="utf-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <link rel="stylesheet" type="text/css" href="bt/css/bootstrap.css"/>
     <link rel="stylesheet" type="text/css" href="ecobilio.css"/>
     <link rel="stylesheet" type="text/css" href="bt/jquery.bxslider/jquery.bxslider.css"/>
     <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
     <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
     <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
     <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
     <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <link href="build/css/custom.css" rel="stylesheet">
     <script src="jquery.min.js"></script>
</head>


<?php 
  include("navigateur.php");
?>

  <section class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="height: auto; margin-bottom: 1%; margin-top: -8px; border-bottom: 2px double white; color: black">
  <h1 style="text-align: center;">Ajouter un sujet</h1>
	<div class="col-lg-5">
	<form class="" method="POST" action="addPost.php?id=<?php echo $_SESSION['id']; ?>&amp;categorie=<?php echo $_GET['categorie']; ?>" style="margin-top: 3%">
		<fieldset>
			<div class="form-group">
				<label for="name">Sujet :</label><br/>
				<input style="" type="text" name="name" placeholder="Nom du sujet" class="form-control champ"/>
			</div>
			<div class="form-group">
				<label for="sujet">Texte :</label><br/>
				<textarea name="sujet" placeholder="Votre sujet" class="form-control"></textarea>
				<input type="hidden" value="<?php echo $_GET['categorie']; ?>" name="categorie"/>
				
			</div>
			<div class="form-group">
			<button type="submit" style="" value="envoi" class="btn btn-primary pullriht" name="envoi_connexion"> Envoyez </button>
			</div>
			
		</fieldset>	  
	</form>
	<?php
		  	if(isset($erreur)){
		  		echo '<h4 style="color: red";>'.$erreur.'</h4>';
		  	} 
		  ?>
	</div>

  </section>

<?php
  include("contenu.php");
?>
</html>

<?php
  }
}
catch(PDOException $e){
  echo 'Echec de la connexion. ' .$e -> getMessage();
} 
?>