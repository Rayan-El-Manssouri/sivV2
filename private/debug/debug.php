<?php echo 
'<link rel="stylesheet" href="http://localhost/sivV2/private/debug/debug.css">' 

?>
<div class="debug">
    <div>
        <p>Copyright (C) Sinara. Tous droits réservés. </p> 
        <span>Php - 8.0.0 / SivV2</span>
        <br>
        <br>
        <span> Bievenue <?php echo $_SESSION['email']; ?></span> <br> <br>
    </div>
    <div class="deug_formulaire">
        <p>Formulaire a traité :  <span><?= $_GET['r'] ?></span></p>
    </div>
</div>

