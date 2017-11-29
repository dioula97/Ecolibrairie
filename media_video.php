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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ecovidéo</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="../html_project/bt/css/bootstrap.css"/>
	<link rel="stylesheet" href="../html_project/build/css/custom.css" /> 
</head>
<body>
	<header class="container-fluid" style="background: DodgerBlue; height: auto">
	<img src="logo/logo.png" width="15%"/>
	</header>
	<div class="row">
	<nav class="col-lg-3 col-md-3 col-sm-5 col-xs-12" style="background: DodgerBlue; height: auto; margin-top: 5px;">
	<div class="col-lg-12" style="margin-left: 2%; height: 250px; margin-top: 1%">
		<a href="media_video.php?id=<?php echo $info_user['id']; ?>"><video src="videos/influxnerveux.mp4 " width="100%" height="245px" controls="" style="border-radius: 5px/5px"></video></a>
	</div>
	<div class="col-lg-12" style="margin-left: 2%; height: 250px; margin-top: 1%">
		<video src="videos/cn.mp4" width="100%" height="245px" controls="" style="border-radius: 5px/5px"></video>
	</div>
	<div class="col-lg-12" style="margin-left: 2%; height: 250px; margin-top: 1%">
		<video src="videos/influxnerveux.mp4 " width="100%" height="245px" controls="" style="border-radius: 5px/5px"></video>
	</div>
	<div class="col-lg-12" style="margin-left: 2%; height: 250px; margin-top: 1%">
		<video src="videos/cn.mp4" width="100%" height="245px" controls="" style="border-radius: 5px/5px"></video>
	</div>
	<div class="col-lg-12" style="margin-left: 2%; height: 250px; margin-top: 1%">
		<video src="videos/influxnerveux.mp4 " width="100%" height="245px" controls="" style="border-radius: 5px/5px"></video>
	</div>
	<div class="col-lg-12" style="margin-left: 2%; height: 250px; margin-top: 1%">
		<video src="videos/cn.mp4" width="100%" height="245px" controls="" style="border-radius: 5px/5px"></video>
	</div>
		
	</nav>
	<section class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="border: 2px solid white; height:800px; margin-top: 5px; margin-left: 2px; width: 74%">
		<video src="videos/influxnerveux.mp4" width="100%" height="790px" autoplay="auto">
			
		</video>
	</section>
	</div>
	<footer class="container-fluid" style="background: DodgerBlue; height: 100px; margin-top: 2px">
		
	</footer>
</body>
</html>

<?php
  }
}
catch(PDOException $e){
  echo 'Echec de la connexion. ' .$e -> getMessage();
} 
?>