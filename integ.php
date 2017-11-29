<?php 
session_start();
include_once('fonctions/fonction.php');
include_once('fonctions/addPost.class.php');
$bdd = bdd();
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
  }
  if(!isset($_SESSION['id'])){
  header("Location:html_project/inscription.php");
}else{
if(isset($_POST['name']) AND isset($_POST['sujet'])){
      $addPost = new addPost($_POST['name'],$_POST['sujet']); 
      $verif = $addPost->verif();
      if($verif == "Ok"){
        if($addPost->insert()){
          
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
  <div class="container-fluid" style="background: DodgerBlue; height: auto; margin-top: 1%">
  <img src="../html_project/logo/logo.png" width="10%"/>
  <h1 style="margin-left: 20%; display: inline-block; color: white">Bienvenue sur le forum Ecoédu</h1>
  </div>
  <?php echo '<h4 style="color: blue; margin-left: 2%">Online: '. '<span style="color: #000">' .$_SESSION['pseudo']. '</span></h4>'; 
if(!empty($info_user['avatar']))
{
?>
<img style="margin-left: 3%" class="img-circle" src="membres/avatars/<?php echo $info_user['avatar']; ?>" width="30"/>
<?php
}else
{
?>
<img width="30" src="images/profil.png" /><!-- code php <?php  ?>  -->
<?php
}
  ?>
  <?php
  if(isset($_GET['categorie'])){
    $_GET['categorie'] = htmlspecialchars($_GET['categorie'])
    ?>
    <h1 style=""><?php echo $_GET['categorie']; ?> </h1>
    <a style="color: blue" href="addPost.php?id=<?php echo $_SESSION['id']; ?>&amp;categorie=<?php echo $_GET['categorie'] ?>">Ajouter un sujet.</a>
    <?php  
      $requete = $bdd->prepare('SELECT * FROM sujet WHERE categorie = :categorie');
      $requete -> execute(array('categorie'=>$_GET['categorie']));

      while($reponse = $requete->fetch()){
        ?>
        <a href="integ.php?id=<?php echo $_SESSION['id']; ?>&amp;sujet=<?php echo $reponse['name']; ?>"><h1 style="text-align: center;">
        <?php echo $reponse['name']; ?> </h1></a>
        <?php
      }
    ?>
  <?php
  }
  else if(isset($_GET['sujet'])){
    $_GET['sujet'] = htmlspecialchars($_GET['sujet'])
    ?>
    <h1 style="color: blue; text-align: center; font-size: 1.1em"><?php echo $_GET['sujet']; ?> </h1>
    <?php
    $req = $bdd -> prepare('SELECT * FROM postSujet WHERE sujet = :sujet');
    $req -> execute(array('sujet'=>$_GET['sujet'])); 
    while($reponse = $req -> fetch()){
      ?> 
        <div style="border: 1px solid DodgerBlue; border-radius: 10px/10px; width: 75%; height: auto; margin-top: 3px; margin-left: 24%">
        <?php 
        $req2 = $bdd->prepare('SELECT * FROM membres WHERE id = :id');
        $req2 -> execute(array('id'=>$reponse['propi']));
        $membres = $req2 -> fetch();
        echo '<h3 style="color: blue; margin-left: 1%; font-family:\'Monotype Corsiva\'">'.$membres['pseudo'].' à '. $reponse['date'].'<br/></h3> ';
        echo '<mark style="margin-left: 1%">'.$reponse['contenu'].'</mark><br/><br/>'; 
        echo '<h4 style="color:blue; text-align: right; margin-right: 2%">'.date("d M Y"). '</h4>';
?>
</div>

   <?php 
    }
    ?>

    <form class="" method="POST" action="integ.php?id=<?php echo $_SESSION['id']; ?>&amp;sujet=<?php echo $_GET['sujet']; ?>" style="margin-top: 3%; width: 90%; margin-left: 5%"/>
    <fieldset>
      <div class="form-group">
        <label for="sujet" style="color: blue">Commentaire</label><br/>
        <textarea name="sujet" placeholder="Participer à la conversation" class="form-control"></textarea>  
      </div>
      <div class="form-group">
        <input type="hidden" name="name" value="<?php echo $_GET['sujet']; ?>"/>
      </div>
      <div class="form-group">
      <button type="submit" style="" value="envoi" class="btn btn-primary pullriht" name="Envoyez"> Envoyez </button>
      </div>
      
    </fieldset>
    <?php  
    if(isset($erreur)){
      echo $erreur;
    }
    ?>    
  </form>
  <?php
  }else{
    $req = $bdd -> query('SELECT * FROM categories');
    while($reponse = $req -> fetch()){
      ?>
      <h1 margin-left: 2%;"><a href="integ.php?id=<?php echo $_SESSION['id']; ?>&amp;categorie=<?php echo $reponse['name']; ?>"> 
      <?php echo $reponse['name']; ?> </a></h1>
      <?php
    }
  }
  ?>
  <div class="container-fluid" style="width: 100%; height: auto; background: DodgerBlue; margin-bottom: auto;">
    <img src="logo/logo.png" width="10%" style="margin: 1%;"/>  
    <ul style="color: white; list-style: none; display: inline-block; float: right; margin: 1%">
      <li><span class="glyphicon glyphicon-home"></span> Dakar Sénégal</li>
      <li><span class="glyphicon glyphicon-envelope"></span> ecolibrairie@gmail.com</li>
      <li><span class="glyphicon glyphicon-earphone"></span> +221 77 ...</li>
    </ul>
  </div>
</section>
<?php
  include("contenu.php");
?>
</html>
<?php
}
?>
