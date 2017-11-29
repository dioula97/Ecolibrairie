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
	<title>math sixieme</title>
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
<body style="background:grey">
<?php 
  include("navigateur.php");
?>

<section class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="height: auto; margin-bottom: 1%;background: DodgerBlue; border-bottom: 2px double white; border-radius: 6px">
                <h1 style="text-align: center; color: orange; text-shadow: 2px 2px 3px black">4<sup>ème</sup> ECO EXERCICES</h1>
 </section>
 <div class="x_content" style="margin-top:-0.5%;background:white">
        <div class="row">
        
          <div class="col-md-4 col-sm-4 col-xs-6" >
                        <div>
                          <div class="image view view-first">
                            <a href="#?id=<?php echo $info_user['id']; ?>"><img style="width: 100%; display: block; height:270px;" src="images/exo1.jpg" alt="image" /></a>
                            <div class="mask">
                              <p>Mathématiques</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;color:DodgerBlue">Mathématiques</p>
                          </div>
                        </div>
                      </div>
         
                       <div class="col-md-4 col-sm-4 col-xs-6" >
                        <div>
                          <div class="image view view-first">
                            <a href="#?id=<?php echo $info_user['id']; ?>"><img style="width: 100%; display: block; height:270px;" src="images/exofranc2.jpg" alt="image" /></a>
                            <div class="mask">
                              <p>français</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;color:DodgerBlue">Français</p>
                          </div>
                        </div>
                      </div>
                        <div class="col-md-4 col-sm-4 col-xs-6" >
                        <div>
                          <div class="image view view-first">
                            <a href="#?id=<?php echo $info_user['id']; ?>"><img style="width: 100%; display: block; height:270px;" src="images/exoanglai.jpg" alt="image" /></a>
                            <div class="mask">
                              <p>Anglais</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;color:DodgerBlue">Anglais</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-6" >
                        <div>
                          <div class="image view view-first">
                            <a href="#?id=<?php echo $info_user['id']; ?>"><img style="width: 100%; display: block; height:270px;" src="images/espagnol.jpg" alt="image" /></a>
                            <div class="mask">
                              <p>Espagnol</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;color:DodgerBlue">Espagnol</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-6" >
                        <div>
                          <div class="image view view-first">
                            <a href="#?id=<?php echo $info_user['id']; ?>"><img style="width: 100%; display: block; height:270px;" src="images/physique.jpg" alt="image" /></a>
                            <div class="mask">
                              <p>physique</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;color:DodgerBlue">Physique</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-6" >
                        <div>
                          <div class="image view view-first">
                            <a href="#?id=<?php echo $info_user['id']; ?>"><img style="width: 100%; display: block; height:270px;" src="images/chimie.jpg" alt="image" /></a>
                            <div class="mask">
                              <p>chimie</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;color:DodgerBlue">Chimie</p>
                          </div>
                        </div>
                      </div>


       </div>  


<div class="footer well" style="width: 100%; height: 120px; background: DodgerBlue; margin-bottom:auto">
    <img src="logo/logo.png" width="10%" style="margin: 1%;"/>  
    <ul style="color: white; list-style: none; display: inline-block; float: right; margin: 1%">
      <li><span class="glyphicon glyphicon-home"></span> Dakar Sénégal</li>
      <li><span class="glyphicon glyphicon-envelope"></span> ecolibrairie@gmail.com</li>
      <li><span class="glyphicon glyphicon-earphone"></span> +221 77 ...</li>
    </ul>
  </div>
  </div>












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