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
  <title>maths première</title>
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
                <h1 style="text-align: center; color: orange; text-shadow: 2px 2px 3px black">1<sup>ère</sup> ECO TABLE DE MATIERES</h1>
 </section>
 <section class="col-md-12 col-lg-12 col-xs-12 col-sm-12 section_mathsix" style="background:white">
 <div class="row matiere">
 <h1 style="color:DodgerBlue;text-align:center;font-weight:bold"><u> PREMIERE S1 et S3</u></h1>
 <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
  <h3 style="color: orange;">NUMERIQUES</h3>
    <li style="color:blue"><span class="glyphicon glyphicon-book" style="color: blue"></span> Applications<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue;"></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book" style="color:blue"></span>Polynomes<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Equations, Inéquations, systèmes<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Suites Numériques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Fonctions Numériques d'une variable Réelle<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
  </ul>
  </div>
    <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
    <h3 style="color: orange;">GEOMETRIE</h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Barycentre et Produit Scalaire<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Transformation Ponctuelles et Isométrie<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Vecteurs dans l'espace<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Droites , Plans ,Sphère<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Dénombrement<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Statistique<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Angles Orientés<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Formules Trigonométriques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Equations et Inéquations Trigonométriques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>

    </ul>
    </div>
    </div>
     <div class="row" style="background:white">
     <h1 style="color:DodgerBlue;text-align:center;font-weight:bold"><u> PREMIERE S2</u></h1>
      <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
    <h3 style="color: orange;">NUMERIQUES</h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Généralités sur les fonctions numériques d'une variable réelle<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Limites<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Continuité<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Dérivation<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> ÉTUDE ET REPRÉSENTATION GRAPHIQUE DE FONCTIONS<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Suites Numériques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Equations Inéquations systèmes<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Applications<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Statiques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>

    </ul>
    </div>
      <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
    <h3 style="color: orange;">GEOMETRIE</h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Outils Vectoriels et  Analytique<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Outils étriques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Outils de Transformation<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Géométrie dans l'espace<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    </ul>
    </div>
 </div>

    <div class="row" style="background:white">
     <h1 style="color:DodgerBlue;text-align:center;font-weight:bold"><u> PREMIERE G</u></h1>
      <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
    <h3 style="color: orange;">NUMERIQUES</h3>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Statiques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Dénombrement<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Probabilité<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span> Suites Numériques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Fonctions Numériques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
         <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Mathématiques Financières<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>

    </ul>
    </div>
    </div>
 <div class="row matiere">
 <h1 style="color:DodgerBlue;text-align:center;font-weight:bold"><u> PREMIERE T</u></h1>
 <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
  <h3 style="color: orange;">NUMERIQUES</h3>
    <li style="color:blue"><span class="glyphicon glyphicon-book" style="color: blue"></span>Dénombrement<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue;"></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book" style="color:blue"></span>Angles et Trigonométries<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Applications<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Equations irrationnelles<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Inéquations<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book"></span>systèmes d'équation dans R<sup>3</sup><a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Suites<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Fonctions Numériques d'une variable réelle<sup>3</sup><a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Limites et Continuité<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Etudes et représentation des fonctions<sup>3</sup><a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Etudes des fonctions Trigonométriques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Nombres Complexes<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Statistique<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>







  </ul>
  </div>
  <div class="col-lg-6">
  <ul style="font-size: 15pt; margin-right: 5em; list-style: none; color: white; line-height: 45px">
  <h3 style="color: orange;">GEOMETRIE</h3>
    <li style="color:blue"><span class="glyphicon glyphicon-book" style="color: blue"></span>Compléments sur le Calculs Vectoriels et le Produit Scalaire<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue;"></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book" style="color:blue"></span>Transformation Ponctuelles et Isométrie<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Vecteurs dans l'espace<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Produit Scalaire<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
        <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Droites, Plans et Sphère<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
    <li style="color:blue"><span class="glyphicon glyphicon-book"></span>Lieux Géométriques<a href="cours_maths/nombres.pdf" class="fa fa-download" style="font-size:30px;margin-left:4%;color:DodgerBlue"></a></a></li>
  </ul>
  </div>
 </div>

                
 </section>




<?php
  include("contenu.php");
?>
                                 <div class="container-fluid" style="  background: gray; ">
     
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