<?php
     session_start();
     require_once '../private/GestionSession/auth.php';
     error_reporting(0);
?>
<header id="headerbar">
          <?php 
               if(est_connecte()){
                    ?>
                    <a href="http://localhost/sivV2/public/connexion/confirmer/panel.php">
                    <?php
               }
               else{
                    ?>
                    <a href="http://localhost/sivV2">
                    <?php
               }
          ?>
          <div>
               <img src="http://localhost/sivV2/private/src/logo2.png" class="logo">
               <p>Siv<p>
          </div>
     </a>
     <div class="separator"></div>
     <a href="">
          <div>
               <span class="material-symbols-outlined">quiz</span>
               <p>Aide</p>
          </div>
     </a>
     <a href="">
          <div>
               <span class="material-symbols-outlined">support_agent</span>
               <p>Contact</p>
          </div>
     </a>
     <div class="space"></div>
     <div class="separator"></div>
     <?php 
          if(est_connecte()){
               ?>
               <a href="http://localhost/sivV2/private/GestionSession/logout.php">
                    <div>
                         <p>Se déconnecter</p>
                    </div>
               </a>
               <?php
          }
          else{
               ?>
               <a href="http://localhost/sivV2/public/connexion/login.php">
                    <div>
                         <p>Se connecter</p>
                    </div>
               </a>
               <?php
          }
     ?>

</header>