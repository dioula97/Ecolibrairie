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
<body style="background:white">
<?php 
  include("navigateur.php");
?>

<section class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="height: auto; margin-bottom: 1%;background: DodgerBlue; border-bottom: 2px double white; border-radius: 6px">
                <h1 style="text-align: center; color: orange; text-shadow: 2px 2px 3px black">6<sup>ème</sup> PROGRAMME ECO ANGLAIS</h1>
 </section>
 <section class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="height: auto; border-bottom: 2px double white; border-radius: 6px">
 <div class="row" style="padding-left: 3%; font-size: 1.5em">
 <div class="col-lg-6">
    
    <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
    <h3 style="color: orange;">GRAMMAIRE</h3>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> L'ordre des mots dans la phrase<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> La phrase négative<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> la phrase interrogative<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> présent simple/ future simple<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> date<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
    </ul>
    </div>
    <div class="col-lg-6">
    <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
    <h3 style="color: orange;">VOCABULAIRE</h3>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Le corps humain<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Les vetements<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Les commerces<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Les aliments<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:DodgerBlue"><span class="glyphicon glyphicon-book"></span> Les couleurs<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>

    </ul>
    </div>

 </div>
                
 </section>



<?php
  include("contenu.php");
?>

                     <div class="container-fluid" style=" height:210px; background: gray; margin-top:240px">
     
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