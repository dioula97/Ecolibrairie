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
	   <title>Ecolibrairie</title>
  	 <meta charset="utf-8"/>
  	 <meta name="viewport" content="width=device-width, initial-scale=1"/>
  	 <link rel="stylesheet" type="text/css" href="bt/css/bootstrap.css"/>
     <link rel="stylesheet" type="text/css" href="bt/jquery.bxslider/jquery.bxslider.css"/>
	   <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
     <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
     <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
     <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
     <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <link href="build/css/custom.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="ecobilio.css"/>
  	 <script src="jquery.min.js"></script>
</head>

<?php 
  include("navigateur.php");
 ?>
        <!-- /top navigation -->

        <!-- page content -->
          
        
        <!-- /page content -->

        <!-- footer content -->
        
        
        <!-- /top navigation -->

        <!-- page content -->
  <section class="col-md-12 col-lg-12 col-xs-12 col-sm-12">

  <div class="col-lg-5 col-xs-12 col-md-5 col-sm-12 introduction_eco">            
      <h3 class="logo"><img src="logo/logo.png" width="150px"/></h3>           
      <p class="para_introduction">
      Ecolibrairie est la contraction de deux noms: <strong>Ecoles et Librairie.</strong> Le site ecolibrairie a pour but d'offrir à l'élève la possibilité de compléter son cours. Dans écolibrairie, l'élève doit s'inscrire pour pouvoir accéder à certains programmes et bénéficier l'outil de travail à 100%. Cette inscription tient compte du profil scolaire de l'élève car doit garrantir la sécurité de celui-ci. Ainsi l'élève va disposer selon son niveau d'étude les bases ou les fondamentaux de son domaine d'étude ainsi que de nombreuses autres possibilités telles que les supports de cours, les exercices corrigés et non corrigés, les exposés adaptés aux différents formats papiers, les sujets d'examens et même des vidéos permettant la bonne maîtrise du sujet. 
      Ecolirairie ne se limite pas seulement aux cours et exos. Toutefois, il permet aux élèves et étudiants de pouvoir échanger grâce au forum et de participer aux jeux en ligne. Cependant bien qu'il soit réservé à l'étude, ceux ne disposant pas de carte d'identité scolaire ou d'étudiant pourront accéder au site et de découvrir le monde d'actualités et de voir les publicités.
      </p>
      <h5>Pour plus de détails, <a href="eco.html" class="btn btn-primary btn-lg">Cliquer</a></h5>
  </div>

              <!-- Images de défilement -->

  <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 images_pos">
    <ul class="images_def">  
      <li><img src="images/ucad3.jpg"/></li> 
      <li><img src="images/tdsi2.jpg"/></li>
      <li><img src="images/tdsi4.jpg"/></li>
      <li><img src="images/tdsi5.jpg"/></li>
      <li><img src="images/tdsi10.jpg"/></li>
    </ul>
  </div>

              <!-- Pied dans la section -->
              
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 pied_pied">
<div class="row">

<div class="col-lg-4">
  <h3>Oeuvres au programme</h3>
    <ul>
      <li><i>Une si longue lettre</i></li>
      <li><i>L'enfant noir</i></li>
      <li><i>Sous l'orage</i></li>
      <li><i>Une vie de boy</i></li>
      <li><i>Madame Bovari</i></li>
      <li><i>Le vieux nègre et la médaille</i></li>
      <li><i>Malade imaginaire</i></li>
      <li><i>Soundiata Keita ou l'épopée Mandingue</i></li>
    </ul>
</div>

<div class="col-lg-4">
  <h3 style="margin-left: 2em">Théorème</h3>
    <ul>
      <li>Pythagore</li>
      <li>Thales</li>
      <li>Al-Kashi</li>
      <li>Bézoutl</li>
      <li>D'Euler</li>
      <li>Fermat</li>
      <li>L'Arithmétique</li>
    </ul>
</div>
<div class="col-lg-4">

  <h3 style="text-align: center;">Lycée</h3>
    <ul>
      <li>Lycée Seydina Limamou Laye</li>
      <li>Lycée Galandou Diouf</li>
      <li>Lycée Seydou Nourou Tall</li>
      <li>Lycée Maurice De La Fosse</li>
      <li>Lycée John Kennedy</li>
      <li>Lycée Ababacar Sy</li>
      <li>LPA</li>
    </ul>
</div>

</div>

<div id="pied_liens" class="row">
  <h3 style="margin-left: 1em">Allez sur:</h3>
      <li><a href="http://www.facebook.com" title="facebook"><img src="icons/face.png"/></a></li>
      <li><a href="http://www.messenger.com" title="messenger"><img src="icons/mess.png"/></a></li>
      <li><a href="http://www.twitter.com" title="twitter"><img src="icons/twit.png"/></a></li>
      <li><a href="http://www.google.com" title="google"><img src="icons/goo.png"/></a></li>
      <li><a href="http://www.amazone.com" title="amazone"><img src="icons/ama.gif"/></a></li>              
</div>

<div class="row">
      <p style="font-size: 15pt; color: white; margin-left: 1em">Pour plus d'informations sur les acteurs cliquez:<a href="#" style="color: orange"><u>ici</u></a></p><br/>
      <img src="images/aicha.png" width="200" title="écolibrairie"><br>
</div>

<div class="row" id="final">
      <p style="text-align: center; font-size: 15pt; color: white"><span style="color: orange">&copy</span> 2017:Votre réussite, notre raison d'être</p>
</div>

</div>
</div>

</section>
        
        <!-- /page content -->

        <!-- footer content -->
        
        </div>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons --=
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  <script src="bt/jquery.bxslider/jquery.bxslider.js"></script>
  <script>
    jQuery(document).ready(function(){
      $('.images_def').bxSlider({
        auto: true
      });
    });
  </script>
 
	
  </body>

</html>

<?php
  }
}
catch(PDOException $e){
  echo 'Echec de la connexion. ' .$e -> getMessage();
} 
?>