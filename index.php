<!DOCTYPE html>
<html>
     <body>
          <?php 
               session_start();
               require_once 'private/GestionSession/auth.php';
               error_reporting(0);
               if(est_connecte()){
                    header("Location: public/connexion/confirmer/panel.php");
               }
               else{
                    header("Location: public/");
               }     
          ?>
     </body>
</html>

