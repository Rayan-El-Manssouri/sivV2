<?php 
session_start();
unset($_SESSION['connecte']);
unset($_SESSION['message']);
header("Location: http://localhost/siv/public")
?>

