<?php 
// Commande : composer require spipu/Html2Pdf
require __DIR__.'/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();

$html2pdf->writeHTML('
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mandat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
    .title{
        position: relative;
        display: flex;
        justify-content: center;
        text-align: center;
        width: 600px;
        top: 5px;
    }
    
    .title .p{
        font-weight: bold;
        font-size: 14px;
        position: relative;
        top: -10px;
         left: -10px;
    }
    
    .title h1{
        color: #003888;
        font-weight: bold;
    
    }
    .center{
        border: 1.2px solid #003888;
        padding: 9px;
        width: 430px;
        position: relative;
        left: 20px;
        top: 50px;
    }

    .span{
        display: flex;
        flex-direction: column;
    }

    </style>
    </head>
<body>
    <div>
        <div>
            <img style="width: 70px; height: 90px; position: relative; left: 20px; top: 6px;" src="src/logo.jpg" >
            <div class="title">
                <h1>MANDAT</h1>
                <p class="p" style="position: relative; top: -10px;">POUR EFFECTUER <br> <span style="text-overflow: ""; width: 2px;">LES FORMALITÉS D" <span style="z-index: 20px; left: -8px; position: relative;">IMMATRICULATION AUPRÉS DU MINISTRE DE L"<span style="position: relative; left: -3.6px;">INTÉRIEUR</span></span> </span>  </p>
                <div>
                    <img style="position: relative; left: 20px; top: -100px; width: 60px; height: 30px;" src="src/logo-cerfa.png" >
                   <br> <span style="position: relative; left: 18px; font-weight: bold;">N° <span>13757*03</span></span>
                </div> 
            </div>
        </div>
        <div class="center">
            <p><span style="font-weight: bold;">Je soussigné(e)</span>, <span style="position: relative; top: -0.3px;">|</span><span style="position: relative; left: -2px;">___________________________________________________</span><span style="position: relative; left: -2px; top: -0.3px;">|</span></p> 
            <span style="position: relative; left: 110px; font-size: 10px; top: -5px;" >NOM, NOM D"<span style="position: relative; left: -2.1px;" >USAGE</span> Le cas échéant et PRÉNOM ou RAISON SOCIALE </span>    
            <div class="span">
                <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                <p style="position: relative; left: -2px;"> <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span> </p>
            </div>    
        </div>
          
    </div>
</body>
</html>'
);
$content = utf8_encode(ob_get_clean());
$html2pdf->output();
ob_flush();
?>