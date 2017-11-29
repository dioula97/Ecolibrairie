<?php 
session_start();
try{
  $bdd = new PDO("mysql:host=localhost;dbname=etudiant; charset=utf8",'root','');
  $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
    if (isset($_POST['pseudo']) AND isset($_POST['message']) AND !empty($_POST['pseudo']) AND !empty($_POST['message'])) {
		$pseudo= htmlspecialchars($_POST['pseudo']);
		$message= htmlspecialchars($_POST['message']);
		$req= $bdd -> prepare("INSERT INTO minichat(pseudo, message) VALUES(?, ?)");
		$req->execute(array($pseudo, $message));
	}
?>
<!Doctype html>
<html>
<head>
	<title>bienvenue au forum</title>
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
<body class="nav-md">
<?php 
  include("navigateur.php");
?>

<section class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style=" margin-bottom: 10%; background: white; border-top:">
<div class="container-fluid" style="background: gray; height: 5px; width: 100%"></div>
					<form action="" method="post">
						<p>
							<div class="form-group" style="color: DodgerBlue">
								<label for="pseudo">Pseudo</label>
								<input type="text"name="pseudo" id="pseudo" style="width: 15%" class="form-control"/>
							</div>
							<div style="color: DodgerBlue">
								<label for="message">Votre commentaire</label> : 
								<textarea id="message" name="message" style="width: 50%" rows="8" class="form-control"></textarea>
							</div>
							<b><br></b>
							<input type="submit" class="btn btn-success" value="Envoyer" />
						</p>
					</form>
					<p>
						<?php
						$reponse = $bdd ->query('SELECT * FROM minichat');
						while ($donnees = $reponse->fetch())
						{
							echo '<p><strong style="color: black">' . htmlspecialchars($donnees['pseudo']) .
							'</strong> : <span style="color: #1E90FF">' . htmlspecialchars($donnees['message']) . '</span></p>';
						}
						$reponse->closeCursor();
						?>
					</p>
				</section>

<?php
  include("contenu.php");
?>
</body>
</html>

<?php
  }
}
catch(PDOException $e){
  echo 'Echec de la connexion. ' .$e -> getMessage();
} 
?>





















