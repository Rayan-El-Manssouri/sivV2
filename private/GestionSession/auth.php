<?php 
function est_connecte():bool{
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connecte']);
}
<<<<<<< HEAD
?>
=======
?>

>>>>>>> main
