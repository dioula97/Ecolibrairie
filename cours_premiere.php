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
  <title>Cours première</title>
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
  <section class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="height: auto; margin-bottom: 1%; margin-top: -8px; border-bottom: 2px double white; background: url('images/photo.jpg'); color: black">
                <h1 style="text-align: center; color: #12f36a; text-shadow: 2px 2px 3px black; border-bottom: 1px solid">PROGRAMME ECO  PREMIERE</h1>

              <div class="x_content">

                    <div class="row">

          <div class="col-md-55">
                        <div>
                          <div class="image view view-first">
                            <a href="mathspremiere.php?id=<?php echo $info_user['id']; ?>"><img style="width: 100%; display: block;" src="mathimage/math.png" alt="image" /></a>
                            <div class="mask">
                              <p>Mathématiques</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">MATHEMATIQUES</p>
                          </div>
                        </div>
                      </div>

          <div class="col-md-55">
                        <div>
                          <div class="image view view-first">
                            <a href="#"><img style="width: 100%; display: block;" src="mathimage/f.png" alt="image" /></a>
                            <div class="mask">
                              <p>Français</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">FRANCAIS</p>
                          </div>
                        </div>
                      </div>
          <div class="col-md-55">
                        <div>
                          <div class="image view view-first">
                            <a href="#"><img style="width: 100%; display: block;" src="mathimage/hg.png" alt="image" /></a>
                            <div class="mask">
                              <p>L'histoire et la géographie</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">HISTO-GEO</p>
                          </div>
                        </div>
                      </div>

          <div class="col-md-55">
                        <div>
                          <div class="image view view-first">
                            <a href="#"><img style="width: 100%; display: block;" src="mathimage/anglais.png" alt="image" /></a>
                            <div class="mask">
                              <p>anlais</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">ANGLAIS</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-55">
                        <div>
                          <div class="image view view-first">
                            <a href="svtpremiere.php?id=<?php echo $info_user['id']; ?>"><img style="width: 100%; display: block;" src="mathimage/svt.png" alt="image" /></a>
                            <div class="mask">
                              <p>Science de la Vie et e la Terre</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">SVT</p>
                          </div>
                        </div>
                      </div>

          <div class="col-md-55">
                        <div>
                          <div class="image view view-first">
                            <a href="#"><img style="width: 100%; display: block;" src="mathimage/eco.png" alt="image" /></a>
                            <div class="mask">
                              <p>Economie Familiale</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">ECOFAM</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-55">
                        <div>
                          <div class="image view view-first">
                            <a href="#"><img style="width: 100%; display: block;" src="mathimage/physique.png" alt="image" /></a>
                            <div class="mask">
                              <p>La physique</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">Physique</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-55">
                        <div>
                          <div class="image view view-first">
                            <a href="#"><img style="width: 100%; display: block;" src="mathimage/chimie.png" alt="image" /></a>
                            <div class="mask">
                              <p>La chimie</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">Chimie</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-55">
                        <div>
                          <div class="image view view-first">
                            <a href="#"><img style="width: 100%; display: block;" src="mathimage/espagnol.png" alt="image" /></a>
                            <div class="mask">
                              <p>Espagnol</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">Espagnol</p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-55">
                        <div>
                          <div class="image< view view-first">
                            <a href="#"><img style="width: 100%; display: block;" src="mathimage/arabe.png" alt="image" /></a>
                            <div class="mask">
                              <p>Arabe</p>
                            </div>
                          </div>
                          <div class="caption">
                            <p style="font-size: 1.3em; font-weight: bold; text-align: center;">Arabe</p>
                          </div>
                        </div>
                      </div>


                     </div>
                                      <div class="footer well" style="width: 100%; height: 190px; background: gray; margin-bottom: auto;">
    <img src="logo/logo.png" width="10%" style="margin: 1%;"/>  
    <ul style="color: white; list-style: none; display: inline-block; float: right; margin: 1%">
      <li><span class="glyphicon glyphicon-home"></span> Dakar Sénégal</li>
      <li><span class="glyphicon glyphicon-envelope"></span> ecolibrairie@gmail.com</li>
      <li><span class="glyphicon glyphicon-earphone"></span> +221 77 ...</li>
    </ul>
  </div>
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
?>r