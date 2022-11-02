<?php 
// Commande : composer require spipu/Html2Pdf

/*

  Pour copié coller |_|
   
  
  <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>

    |_____|

    <span>|</span><span  style="position: relative; left: -2px;">______</span><span style="position: relative; left: -2px;">|</span>

*/
require __DIR__.'./vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();

$html2pdf->writeHTML('
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mandat</title>
    <style>
    .title{
      position: relative;
      left: -70px;
      padding: 0px;
      margin: 0px;
      top: -10px;
      text-align: center;
    }
    .title h1{
      font-weight: 900;
      font-size: 15px; 
    }

    .title strong{
      color: #003888;

    }

    .vehicule strong{
      color: #003888;
    }

    .vehicule{
      position: relative;
      left: 47px;
    }
    
    .border_1{
      border-bottom: #003888;
      width: 25px;
      position: absolute;
      left: -28px;
      top: 7px;
    }

    .border_2{
      border-bottom: #003888;
      width: 25px;
      position: absolute;
      left: -28px;
      top: 7px;
    }
    
    </style>
    </head>
<body>
  <img src="src/logo.jpg" style="width: 60.6px; position: relative; left: 19px; top: 2px;">
  <div class="title">
    <h1><strong>CERTIFICAT DE CESSION D"<span style="background-color: #fff; position: relative; left: -3.1px;">UN</span> VÉHICULE D"<span style="background-color: #fff; position: relative; left: -3.1px;">OCASION</span></strong></h1>
    <strong>(à remplir par l" <span style="background-color: #fff; position: relative; left: -3.7px;">ancien</span> propriétaire et le nouveau propriétaire  )</strong>
    <p>Articles R322-4 et R322-9 du code de la route</p>  
  </div>
    <div style="position: relative; ">
      <img style="position: relative; left: 670px; top: -71px; width: 61px; height: 30px;" src="src/logo-cerfa.png" > 
      <div style="position: relative; left: -70px; top: 20px;">
        <p>N° 15776*02</p>
      </div>
    </div>
    <div class="vehicule">
      <div class="border_1"></div>
      <div class="border_2"></div>
      <strong>LE VÉHICULE (à remplir par l’ancien propriétaire)</strong>
    </div>

</body>
</html>'
);
$content = utf8_encode(ob_get_clean());
$html2pdf->output();
ob_flush();
?>