<body class="nav-md" style="background:grey">
  <div class="container body" >
      <div class="main_container" >
        <div class="col-md-3 left_col"  >
          <div class="left_col scroll-view" style="background:grey">
          
            <img src="logo/logo.png" class="img-circle" width="100%" style="margin-top:0%" />
            <br/><br/>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="background:grey" >
              <div class="menu_section">
                <h3>Programmes</h3>
                <ul class="nav side-menu" >
                  <li>
                  <a  href="ecobiblio.php?id=<?php echo $info_user['id']; ?>"  style="background:grey" ><i class="fa fa-home "></i><b>Accueil</b></a>          
                  </li>
                  <li><a style="background:grey"><i class="fa fa-book"></i><b> Cours </b> <span class="fa fa-chevron-down"  ></span></a>
                    <ul class="nav child_menu" >
                      <li ><a href="cours_sixieme.php?id=<?php echo $info_user['id']; ?>" >Sixième</a></li>
                      <li><a href="cours_cinquieme.php?id=<?php echo $info_user['id']; ?>">Cinquième</a></li>
                      <li><a href="cours_quatrieme.php?id=<?php echo $info_user['id']; ?>">Quatrième</a></li>
                      <li><a href="cours_troisieme.php?id=<?php echo $info_user['id']; ?>">Troisième</a></li>
                      <li><a href="cours_seconde.php?id=<?php echo $info_user['id']; ?>">Seconde</a></li>
                      <li><a href="cours_premiere.php?id=<?php echo $info_user['id']; ?>">Première</a></li>
                      <li><a href="cours_terminal.php?id=<?php echo $info_user['id']; ?>">Terminale</a></li>
                    </ul>
                  </li>
                  <li><a style="background:grey"><i class="fa fa-pencil"></i> <b>Exercices</b> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="exo_sixieme.php?id=<?php echo $info_user['id']; ?>">Sixième</a></li>
                      <li><a href="exo_cinquieme.php?id=<?php echo $info_user['id']; ?>">Cinquième</a></li>
                      <li><a href="exo_quatrieme.php?id=<?php echo $info_user['id']; ?>">Quatrième</a></li>
                      <li><a href="exo-troisieme.php?id=<?php echo $info_user['id']; ?>">Troisième</a></li>
                      <li><a href="exo_second.php?id=<?php echo $info_user['id']; ?>">Seconde</a></li>
                      <li><a href="exo_premiere.php?id=<?php echo $info_user['id']; ?>">Première</a></li>
                      <li><a href="exo_terminal.php?id=<?php echo $info_user['id']; ?>">Terminale</a></li>
                    </ul>
                  </li>
                  <li><a style="background:grey"><i class="fa fa-graduation-cap"></i><b> Examens</b> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="examen_secondaire.html">college</a></li>
                      <li><a href="examen_superieur.html">lycée</a></li>   
                    </ul>
                  </li>
                  <li><a style="background:grey"><i class="fa fa-calculator"></i><b> Formules</b> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="formules_math.html">Mathématiques</a></li>
                      <li><a href="formules_physique.html">Physiques</a></li>
                      <li><a href="formules_chimique.html">Chimiques</a></li>
                    </ul>
                  </li>
                  <li><a style="background:grey"><i class="fa fa-desktop"></i><b>Informatique</b> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="info_bureautique.html">bureautique</a></li>
                      <li><a href="info_algo.html">Algorithme</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3> PLUS</h3>
                <ul class="nav side-menu">
                  <li><a style="background:grey"><i class="fa fa-folder-o"></i><b> Dictionnaires </b><span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="dico_fr.html">Français</a></li>
                      <li><a href="dico_en.html">Anglais</a></li>
                      <li><a href="dico_es.html">Espagnol</a></li>
                    </ul>
                  </li>
                  <li><a style="background:grey"><i class="fa fa-edit"></i><b> Oeuvres</b> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="oeuvre_lit.html">Oeuvres Scientifiques</a></li>
                      <li><a href="oeuvre_sci.html">Oeuvres Litteraires</a></li>
                    </ul>
                  </li>
                  <li><a style="background:grey"><i class="fa fa-print"></i><b> Exposés</b> <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="expose_lit.html">Exposés Scientifiques</a></li>
                      <li><a href="expose_sci.html">Exposés Litteraires</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

              <div class="menu_section">
                <h3> UTILES</h3>
                <ul class="nav side-menu">
                  <li><a style="background:grey"><i class="fa fa-flag-o"></i><b>Rencontre</b><span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="integ.php?id=<?php echo $info_user['id']; ?>">Forum</a></li>
                      <li><a href="culte_eu.html"> Estudiantine</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a href="auteurs.html" data-toggle="tooltip" data-placement="top" title="Auteurs">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </a>
              <a href="mailto:evilbas1038@gmail.com" data-toggle="tooltip" data-placement="top" title="E-mail">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              </a>
              <a href="commentaire.html" data-toggle="tooltip" data-placement="top" title="Commentaire">
                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
              </a>
              <a href="mailto:evilbas1038@gmail.com" data-toggle="tooltip" data-placement="top" title="Monde">
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu" style="background: white">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>  
              <span style="font-family:'Monotype Corsiva';color:DodgerBlue;display:inline;font-weight:bold;font-size:40pt"> Bienvenue sur ecolibrairie</span>

              <ul class="nav navbar-nav navbar-right" style="height: auto; margin-top: -80px">
                <li>
                  <?php
                      if(!empty($info_user['avatar']))
                      {
                    ?>
                    <a style="background: transparent;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="membres/avatars/<?php echo $info_user['avatar']; ?>" width="50" class="img-circle" middle/>
                    <span class=" fa fa-angle-down"></span>
                        </a>
                    <?php
                      }else
                      {
                      ?>
                        <a style="background: transparent;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="images/profil.png" /><!-- code php <?php  ?>  -->
                        <span class=" fa fa-angle-down"></span>
                        </a>
                        <?php
                      }
                      ?>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  	
                    <h5 style="color: DodgerBlue; margin-left: 4%; font-weight: bold;"><?php echo ''.$info_user['prenom'].' '; echo $info_user['nom']; ?></h5>
                    <h5 style="color: DodgerBlue; margin-left: 4%; text-decoration: underline; font-weight: bold;"><?php echo $info_user['pseudo']; ?></h5>
                    <h6><a href="mis_profil.php" style="color: DodgerBlue; font-weight: bold; margin-left: 4%; font-size: 1.2em"> Modifier profil </a></h6>
                    <?php
                        if(isset($_SESSION['id']) AND $info_user['id'] == $_SESSION['id']){
                    ?>
                    <li><a href="deconnexion.php" style="font-weight: bold; color: DodgerBlue; margin-left: -4%; background-color: transparent;"><i class="fa fa-sign-out pull-right"></i> Déconnexion</a></li>
                    <?php
                    }
                    ?>
                  </ul>
                </li>
              </ul>

                    
                    
            </nav>
          </div>