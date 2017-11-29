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
  <title>Français sixieme</title>
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
<body style="background:url('images/photo.jpg')">
<?php 
  include("navigateur.php");
?>

<section class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="height: auto; margin-bottom: 1%;background: DodgerBlue; border-bottom: 2px double white; border-radius: 6px">
                <h1 style="text-align: center; color: orange; text-shadow: 2px 2px 3px black;font-weight:bold">6<sup>ème</sup> ECO TABLE DE MATIERES</h1>
 </section>
 <section class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="height: auto; border-bottom: 2px double white; border-radius: 6px;">
 <div class="row" style="padding-left: 3%; font-size: 1.5em">
 <div class="col-lg-6">
  
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
  <h3 style="color: orange;font-weight:bold">ETUDE DE LA LANGUE</h3>
    <li style="color: DodgerBlue"><span class="glyphicon glyphicon-book"></span> Grammaire<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
    <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Orthographe<a href="cours_français/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
    <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Lexique<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
  </ul>
  </div>
    <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
    <h3 style="color: orange;font-weight:bold">LECTURE</h3>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Initiation à la poésie<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Initiation au théatre<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Etude de l'image<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>

    </ul>
    </div>
    <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
    <h3 style="color: orange;font-weight:bold">EXPRESSION ECRITE</h3>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Récits rendant compte d’une expérience personnelle<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Narrations à partir des œuvres étudiés dans le cadre de l’histoire des arts<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Ecrits à partir des supports divers permettant de développer des qualités d’imagination<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue">
</a></li>

    </ul>
    </div>
    <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
    <h3 style="color: orange;font-weight:bold">EXPRESSION ORALE</h3>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Identifier les différentes situations de communication orale et ce qu’elles impliquent<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> 
S’exprimer de façon audible et compréhensible, dans un niveau de langue approprié<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue">
</a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> •Ecouter et prendre en compte la parole d’autrui<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>

    </ul>
    </div>
 </div>
      
 </section>

<?php
  include("contenu.php");
?>
                          <div class="container-fluid" style=" height:150px; background: gray">
    <img src="logo/logo.png" width="10%" style="margin: 1%;"/>  
    <ul style="color: white; list-style: none; display: inline-block; float: right; margin: 1%">
      <li><span class="glyphicon glyphicon-home"></span> Dakar Sénégal</li>
      <li><span class="glyphicon glyphicon-envelope"></span> ecolibrairie@gmail.com</li>
      <li><span class="glyphicon glyphicon-earphone"></span> +221 77 ...</li>
    </ul>
  </div>
</body>
</html>


<?php
  }
}
catch(PDOException $e){
  echo 'Echec de la connexion. ' .$e -> getMessage();
} 
?>

