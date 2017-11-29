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
	<title>svt première</title>
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
                <h1 style="text-align: center; color: orange; text-shadow: 2px 2px 3px black">1<sup>ère</sup> ECO TABLE DE MATIERES</h1>
 </section>
 <section class="col-md-12 col-lg-12 col-xs-12 col-sm-12 section_mathsix">
 <div class="row matiere">
 <div class="col-lg-6">
 	
 	<ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
 	<h3 style="color: orange;">ORGANISATION DE LA CELLULE</h3>
 		<li style="color:blue"><span class="glyphicon glyphicon-book" style="color: blue"></span> Les techniques d'étude de la cellule vivante<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue;"></a></li>
 		<li style="color:blue"><span class="glyphicon glyphicon-book" style="color:blue"></span> organisation de la cellule<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> cas particuliers des bactéries et des virus<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <h3 style="color: orange;"> LA BIOLOGIE CELLULAIRE</h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Les mouvements cellulaire<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Les échanges cellulaires<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> La synthèse des protéines<a href="cours_svt/synthesedesproteines.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> La division cellulaire<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Les chromosomes<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <h3 style="color: orange;"> ALIMENTATION ET NUTRITION CHEZ L'ESPECE HUMAINE </h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Les aliments chez l'espece humaines<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Des aliments aux nutriments<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> La destinée des nutriments<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <h3 style="color: orange;"> LIBERATION D'ENERGIE </h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> La libération d'energie par la respiration<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> La libération d'energie par la fermentation<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <h3 style="color: orange;"> BESOINS EN MATIERE ET EN ENERGIE </h3>
         <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Les besoins de l'organismes<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Les rations alimentaires<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>

    </ul>
    </div>
   <div class="col-lg-6">
  
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
  <h3 style="color: orange;"> INTRODUCTION A LA GEOLOGIE</h3>
    <li style="color:blue"><span class="glyphicon glyphicon-book" style="color: blue"></span> Les techniques d'étude de la cellule vivante<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue;"></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book" style="color:blue"></span> organisation de la cellule<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> cas particuliers des bactéries et des virus<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <h3 style="color: orange;"> LA BIOLOGIE CELLULAIRE</h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> INTRODUCTION A LA GEOLOGIE<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> ETUDE DE LA CARTE GEOLOGIQUE<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> LA GEOLOGIE DU SENEGAL<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <h3 style="color: orange;">  ROCHES : CONSTITUTION ET GENESE</h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Les differents types de roches<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Etude des roches madmatiques : LE GRANITE ET LE BASALTE<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Etude des roches sédimentaires et résiduelles<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Etude des roches métamorphiques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Le cycle des roches<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <h3 style="color: orange;"> HISTOIRE GEOLOGIQUE  </h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> PRINCIPES ET METHODES DE DATATION DES EVENEMENTS EN GEOLOGIE <a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> LA RECONSTITUTION DES ANCIENS MILIEUX OU PALEOGEOGRAPHIE<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <h3 style="color: orange;"> STRUCTURE INTERNE DU GLOBE : FONCTIONNEMENT ET CONSEQUENCES  </h3>
         <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Structure interne du globe terrestre<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>La tectonique des plaques et ses conséquences<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
         <h3 style="color: orange;"> RESSOURCES GEOLOGIQUES DU SENEGAL  </h3>
           <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Les ressources géologiques du sSENEGAL<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>

    </ul>
    </div>




 </div>

                
 </section>




<?php
  include("contenu.php");
?>
                                 <div class="container-fluid" style=" height:190px; background: gray; margin-top:240px">
     
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