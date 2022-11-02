<?php 
// Commande : composer require spipu/Html2Pdf

/*

  Pour copié coller |_|
   
  
  <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>

    |_____|

    <span>|</span><span  style="position: relative; left: -2px;">______</span><span style="position: relative; left: -2px;">|</span>

*/
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
        padding: 9px;
        width: 430px;
        position: relative;
        left: 20px;
        top: 50px;
    }

    .span{
        display: flex;
        flex-direction: column;
        position: relative;
        left: 70px;
        top: -28px;
    }

    .border{
        border: 1.2px solid #003888;
        position: absolute;
        top: 170px;
        left: 20px;
        width: 700px;
        height: 800px;
    }

    .text_adresse{
        display: flex;
        text-align: center;
        position: relative;
        left: -120px;
        font-size: 10px;
        width: 800px;
    }
  

    .text_adresse a{
        text-decoration: none;
        color: black;
        padding: 50px;
    }

    .m_adresse{
        padding: 0px;
        margin: 0 5px;
    }

    .adresse_2{
        position: relative;
        left: 97px;
        top: 20px;
        width: 800px;

    }

    .vehicule h4{
    }

    .checked{
        position: relative; 
        left: 30px;
        top: 20px;
        width: 800px;
        font-size: 10px;
    }

    .end{
        border: 1.2px solid #003888;
        padding: 9px;
        position: relative;
        top: 30px;
        left: 20px;
        width: 700px;
        font-size: 9.5px;
        background-color: #DCE8F2;
        font-weight: bold;

    }
    
   

    </style>
    </head>
<body>
    <div>
        <div class="border"></div>
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
            <p><span style="font-weight: bold; width: 1000px;">Je soussigné(e)</span>, <span style="position: relative; top: -0.3px;">|</span><span style="position: relative; left: -2px;">_________________________________________________</span><span style="position: relative; left: -2px; top: -0.3px;">|</span></p> 
            <span style="position: relative; left: 110px; font-size: 10px; top: -7px;" >NOM, NOM D"<span style="position: relative; left: -2.1px;" >USAGE</span> Le cas échéant et PRÉNOM ou RAISON SOCIALE </span>    
            <div class="span">
                    <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                    <span style="position: relative; left: -7px;"> <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span> </span>
                    <span style="position: relative; left: -7px;"> <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span> </span>
                    <span style="position: relative; left: -7px;"> <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span> </span>
                    <span style="position: relative; font-size: 10px; top: 14px; left: -180px;">N° SIRET, le cas échéant</span>
            </div>
            <br>
            <br>
            <div class="adresse" style=" width: 830px;">
                <span name="N° de la voie" style="font-weight: bold;">domicilié(e) à : </span>   <span>|</span><span  style="position: relative; left: -2px;">________</span><span style="position: relative; left: -2px;">|</span>  
                <span name="Extension(bis, ter, .)">|</span><span  style="position: relative; left: -2px;">_____________</span><span style="position: relative; left: -2px;">|</span>
                
                
                <span name="Type de voie (avenue, etc.)">|</span><span  style="position: relative; left: -2px;">__________________</span><span style="position: relative; left: -2px;">|</span>
                
                
                <span name="Nom de la voie" style="position: relative; top: -0.3px;">|</span><span style="position: relative; left: -2px;">____________________________________</span><span style="position: relative; left: -2px; top: -0.3px;">|</span>

               

            </div>
            <div class="text_adresse">
                <a class="m_adresse" style="position: relative; left: 31px;">N° de la voie</a>
                <a class="m_adresse" style="position: relative; left: 10px;">Extension(bis, ter, .)</a>
                <a class="m_adresse" style="position: relative; left: 10px;">Type de voie (avenue, etc.)</a>
                <a class="m_adresse" style="position: relative; left: 30px;">Nom de la voie</a>
            </div>
            <div class="adresse_2">
                <div>
                    <span name="Code postal">|</span><span  style="position: relative; left: -2px;">___</span><span style="position: relative; left: -2px;">|</span> 
                    <span style="position:relative;left:-7px;">|</span><span  style="position: relative; left: -2px;">___</span><span style="position: relative; left: -2px;">|</span>
                    <span style="position:relative;left:-7px;">|</span><span  style="position: relative; left: -2px;">___</span><span style="position: relative; left: -2px;">|</span>
                    <span style="position:relative;left:-7px;">|</span><span  style="position: relative; left: -2px;">___</span><span style="position: relative; left: -2px;">|</span>
                    <span style="position:relative;left:-7px;">|</span><span  style="position: relative; left: -2px;">___</span><span style="position: relative; left: -2px;">|</span>
                    <span style="position: relative; left: 10px;">|</span><span  style="position: relative; left: -2px;">____________________________</span><span style="position: relative; left: -2px;">|</span>
                    <span style="position: relative; left: 10px;">|</span><span  style="position: relative; left: -2px;">______________________________</span><span style="position: relative; left: -2px;">|</span>
                </div>
                <div class="text_adresse_2">
                    <span style="font-size: 10px;">Code postal</span>
                    <span style="font-size: 10px; position: relative; left: 70px;">Nom de la commune</span>
                    <span style="font-size: 10px; position: relative; left: 130px;">Pays</span>
                </div>
            </div>
            <br>
            <br>
            <div class="mandant">
                <p><span style="font-weight: bold; width: 1000px;">donnat mandat à</span> : <span style="position: relative; top: -0.3px;">|</span><span style="position: relative; left: -2px;">_________________________________________________</span><span style="position: relative; left: -2px; top: -0.3px;">|</span></p> 
                <span style="position: relative; left: 120px; font-size: 10px; top: -7px;" >NOM, NOM D"<span style="position: relative; left: -2.1px;" >USAGE</span> Le cas échéant et PRÉNOM ou RAISON SOCIALE </span>    
                <div class="span" style="position: relative; left: 60px;">
                    <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                    <span style="position: relative; left: -7px;"> <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span> </span>
                    <span style="position: relative; left: -7px;"> <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span> </span>
                    <span style="position: relative; left: -7px;"> <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span><span style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span> </span>
                    <span style="position: relative; font-size: 10px; top: 14px; left: -180px;">N° SIRET, le cas échéant</span>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div>
                <span style="font-weight: bold; font-size: 12px; ">pour effectuer pour mon compte les formalités administratives liées à l"<span style="position: relative; left: -2px; background-color: #fff;">opération</span> <span>d"<span style="position: relative; left: -2px; background-color: #fff;">immatriculation suivante :</span></span>  </span>
                <br>
                <br>
                <br>
                <span style="position: relative; left: 150px;">
                    <span>|</span><span  style="position: relative; left: -2px;">____________________________________________</span><span style="position: relative; left: -2px;">|</span>                
                </span>
            </div>
            <br>
            <br>
            <div class="vehicule">
                <h4 ><div style="border-bottom: 1.2px solid #000; width: 147px; heigth: 0px; padding: 0px; margin: 0px;">Véhicule concerné</div></h4>
                <div style="position: relative; left: 40px;">
                        <p > Marque :    <span style="position: relative; left: 20px;">
                        <span>|</span><span  style="position: relative; left: -2px;">_______________________________</span><span style="position: relative; left: -2px;">|</span>
                    </span> </p>   
                </div>
                <br>
                <div style="position: relative; left: 40px;">
                        <p>Numéro VIN :  <span style="position: relative; left: 20px;">
                        <span>|</span><span  style="position: relative; left: -2px;">_______________________________</span><span style="position: relative; left: -2px;">|</span>
                    </span></p> 
                </div>
                <br>
                <div style="position: relative; left: 40px; width: 800px;">
                        <p>Numéro d"<span style="position: relative; left: -2.1px; background-color: #fff;">immatriculation (le cas échéant)</span> :  <span style="position: relative; left: 20px;">
                        <span>|</span><span  style="position: relative; left: -2px;">_______________________________</span><span style="position: relative; left: -2px;">|</span>
                    </span></p> 
                </div>
                <div class="checked">
                <input type="checkbox" id="scales" name="scales" checked><span>
                    Je suis informé (e) que pour circuler avec ce véhicule je suis dans l"<span style="position: relative; left: -2.2px; background-color: #fff;">obligation de l"<span style="position: relative; left: -2.2px; background-color: #fff;">assurer préablamement (articles L. 324-1 el L. <br>  <span style="position : relative; left: 17px;">324-2 du code de la route</span> ).</span></span>
                    </span>
                    <br>
                    <br>
                    <div style="
                    position: relative; 
                    left: -7px;
                    top: 10px;
                    font-size: 10px;
                    font-style: italic;
                    ">
                        <span>Important : Si vous circulez avec un véhicule non assuré, en cas d"<span style="position: relative; left: -2.2px; background-color: #fff;">accident, vos dommages ne seraient pas couverts et, en cas <br> d"<span style="position: relative; left: -2.2px; background-color: #fff;"> éventuelles victimes, vous pourriez être amené (e) à rembourser des sommes considérables. De plus, vous vous exposeriez à des <br> sanctions pénales. </span> </span></span>
                    </div>
                </div>

                <div style="
                position: relative; 
                left: 20px;
                top: 10px;
                font-size: 10px;
                width: 800px;
                ">
                    <span  > Fait à <span style="position: relative; left: 5px;">
                        <span></span><span  style="position: relative; left: -2px;">__________________________________  <span style="position: relative; top: 2px;">,</span></span><span style="position: relative; left: -2px;"></span>      <span style="position: relative; top: 3px;">le
                        <span>|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                        <span style="position: relative; left: -6px;">|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                        <div style="position :relative; left: 10px;">
                            <span style="position: relative; left: -6px;">|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                            <span style="position: relative; left: -6px;">|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                        </div>
                        <div style="position :relative; left: 300px; top: -10.5px;">
                            <span style="position: relative; left: -6px;">|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                            <span style="position: relative; left: -6px;">|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                            <span style="position: relative; left: -6px;">|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                            <span style="position: relative; left: -6px;">|</span><span  style="position: relative; left: -2px;">__</span><span style="position: relative; left: -2px;">|</span>
                        </div>
                       

                        </span>      
                    </span> </span>

                    <div style="font-size: 8px;">
                        <span style="position : relative; left: 240px; ">Jour</span>
                        <span style="position: relative; left: 10px;">Mois</span>
                        <span style="position: relative; left: 15px;">Année</span>
                    </div>
                </div>
            </div>
            <div style="position: relative; left: 560px;">
                <p style="font-weight: bold; font-size: 11px; position: relative; top: -5px;">Signature</p>
                <span style="position: relative; font-size: 9px; top: -10px;">Pour les sociétés, nom et qualité <br> du signataire et cachet</span>
            </div>
        </div>  
    </div>
    <div class="end">
        <span> La loi n° 78-71 du 6 janvier 1978 relative à l"<span style="position:relative; left: -2.2px; background-color: #DCE8F2;">informatique, aux fichiers et aux libertés, garanti un droit d"<span style="position:relative; left: -2.2px;         background-color: #DCE8F2;">accés et de rectification des donnés auprés d"<span style="position:relative; left: -2.2px; background-color: #DCE8F2;>une préfécture de son choix. <br> je m"<span style="position:relative; left: -2.2px; background-color: #DCE8F2;">oppose à la réutilisation de mes donnés personnelles à des fins de prosperction commerciale <input type="checkbox"></span></span></span></span></span>
    </div>
    <div>
        <img src="src/fleche.png" style="width: 20px; position: relative; top: -436px; left: 45px;" >
        <img src="src/fleche.png" style="width: 20px; position: relative; top: 43px; left: -25px;" >
        <img src="src/fleche.png" style="width: 20px; position: relative; top: 43px; left: -25px;" >
    </div>
</body>
</html>'
);
$content = utf8_encode(ob_get_clean());
$html2pdf->output();
ob_flush();
?>