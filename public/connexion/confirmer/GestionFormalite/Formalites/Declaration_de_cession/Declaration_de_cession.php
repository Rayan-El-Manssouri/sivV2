<?php 

require '../../../../../../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$TopDivVehicule = "-17px";
$TopDivVehicule2Partie = "-30px";

$html = "
    <!-- Contenue -->
    <div>

        <img src='../asset/pdf/logo.jpg' style='width: 81px; position: absolute; top: 10px;' >
        <span style='position: absolute; left: 160px; top: -50px; font-weight: bold; color: #0B368C; font-size: 15px; '>CERTIFICAT DE CESSION D’UN VÉHICULE D’OCCASION</span>
        <span style='position: absolute; left: 150px; top: -15px; font-weight: bold; color: #0B368C; font-size: 15px; '>(à remplir par l’ancien propriétaire et le nouveau proprietaire)</span>
        <span style='position: absolute; left: 200px; top: 15px; font-size: 15px; '>Articles R322-4 et R322-9 du code de la route</span>
        <img src='../asset/pdf/logo_cerfa.png' style='width: 75px; position: absolute; top: 10px; left: 650px;' >
        <span style=' position: absolute; top: -20px; left: 645px; font-weight: bold;'>N° 15776*02</span>
        <span style=' position: absolute; top: 40px; left: 540px; font-style: italic; font-size: 10px;'>Exemplaire 1 destiné à l’ancien propriétaire</span>
        <div style='position: absolute;  left: -21.5px; top: 55px;'>
            <span style=' position: absolute; top: 99.2px; left: 30px;'>|</span>
            <span style=' position: absolute; top: 99.2px; left: 50px;'>|</span>
            <span style=' position: absolute; top: 99.2px; left: 70px;'>|</span>
            <span style=' position: absolute; top: 99.2px; left: 90px;'>|</span>
            <span style=' position: absolute; top: 99.2px; left: 110px;'>|</span>
            <span style=' position: absolute; top: 99.2px; left: 130px;'>|</span>
            <span style=' position: absolute; top: 99.2px; left: 150px;'>|</span>
            <span style=' position: absolute; top: 99.2px; left: 170px;'>|</span>
            <span style=' position: absolute; top: 99.2px; left: 190px;'>|</span>
            <span style=' position: absolute; top: 110px; left: 28px; font-size: 8px;'>(A) Numéro d’immatriculation du véhicule</span>
            <div style='position: absolute; border-bottom: 1px solid black; width: 164.5px; top: 113px; left: 31.5px;' ></div>

        </div>


        <div style='position: absolute; left: -20px; top: -17px;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 325px; top: 185px; left: 205px;' ></div>
            <span style=' position: absolute; top: 171px; left: 204px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 224px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 244px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 264px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 284px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 304px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 324px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 344px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 364px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 384px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 404px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 424px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 444px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 464px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 484px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 504px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 524px;'>|</span>
            <span style=' position: absolute; top: 191px; left: 200px; font-size: 8px;'>(E) Numéro d’identification du véhicule</span>

        </div>

        <div style='position: absolute; left: -20px; top: $TopDivVehicule;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 45px; top: 185px; left: 545px;' ></div>
            <span style=' position: absolute; top: 171px; left: 543.6px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 563.6px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 584px;'>|</span>
        </div>

        <div style='position: absolute; left: 35px; top: $TopDivVehicule;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 45px; top: 185px; left: 545px;' ></div>
            <span style=' position: absolute; top: 171px; left: 543.6px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 563.6px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 584px;'>|</span>
        </div>


        <div style='position: absolute; left: -30px; top: $TopDivVehicule;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 65px; top: 185px; left: 665px;' ></div>
            <span style=' position: absolute; top: 171px; left: 663.8px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 683.8px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 703.8px;'>|</span>
            <span style=' position: absolute; top: 171px; left: 724px;'>|</span>
            <span style=' position: absolute; top: 191px; left: 550px; font-size: 8px;'>(B) Date de 1re immatriculation du véhicule</span>
        </div>




        <div style='position: absolute; left: -24px; top: $TopDivVehicule2Partie;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 161px; top: 230px; left: 35px;' ></div>
            <span style='position: absolute; top: 215.5px; left: 33.7px;'>|</span>
            <span style='position: absolute; top: 215.5px; left: 190px;'>|</span>
            <span style='position: absolute; top: 235px; left: 30px; font-size: 10px;'>(D.1 Marque)</span>
        
        </div>
    

        <div style='position: absolute; left: -24px; top: $TopDivVehicule2Partie;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 145px; top: 230px; left: 210px;' ></div>
            <span style='position: absolute; top: 216px; left: 208.6px;'>|</span>
            <span style='position: absolute; top: 216px; left: 349px;'>|</span>
            <span style=' position: absolute; top: 235px; left: 210px; font-size: 8px;'>(D.2 Type, variante, version)</span>
        </div>


        <div style='position: absolute; left: -29px; top: $TopDivVehicule2Partie;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 160px; top: 230px; left: 380px;' ></div>
            <span style='position: absolute; top: 216px; left: 378.6px;'>|</span>
            <span style='position: absolute; top: 216px; left: 534px;'>|</span>
            <span style='position: absolute; top: 235px; left: 380px; font-size: 10px;'>(J.1 Genre national)</span>
        </div>

        <div style='position: absolute; left: -24px; top: $TopDivVehicule2Partie;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 174px; top: 230px; left: 550px;' ></div>
            <span style='position: absolute; top: 216px; left: 548.7px;'>|</span>
            <span style='position: absolute; top: 216px; left: 718px;'>|</span>
            <span style='position: absolute; top: 235px; left: 550px; font-size: 10px;'>(D.3 Dénomination commerciale)</span>
        </div>


        <span style='position: absolute; top: 227px; left: 12px; font-size: 11px; '>Kilométrage inscrit au compteur du véhicule :</span>



        <div style='position: absolute; left: -105px; top: -50px;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 161px; top: 290px; left: 345px;' ></div>
            <span style='position: absolute; top: 276px; left: 343.7px;'>|</span>
            <span style='position: absolute; top: 276px; left: 500px;'>|</span>
        </div>



        <span style='position: absolute; top: 250px; left: 12px; font-size: 12px '>Présence du certificat d’immatriculation :</span>


        <div style='position: absolute; top: -62px; left: -25px;'>
            <input style='position: absolute; top: 335px; left: 35px; font-weight: bold;' type='checkbox' >
            <span style='position: absolute; top: 335px; left: 55px; '>OUI – numéro de formule</span> 
            <div style='border-bottom: 1px solid black; width: 200px; position: absolute; top: 345px; left: 215px; '></div>
            <span style='position: absolute; top: 330.9px; left: 213.7px;'>|</span>
            <span style='position: absolute; top: 330.9px; left: 233.7px;'>|</span>
            <span style='position: absolute; top: 330.9px; left: 253.7px;'>|</span>
            <span style='position: absolute; top: 330.9px; left: 273.7px;'>|</span>
            <span style='position: absolute; top: 330.9px; left: 293.7px;'>|</span>
            <span style='position: absolute; top: 330.9px; left: 313.7px;'>|</span>
            <span style='position: absolute; top: 330.9px; left: 333.7px;'>|</span>
            <span style='position: absolute; top: 330.9px; left: 353.7px;'>|</span>
            <span style='position: absolute; top: 331.6px; left: 370px;'>|</span>
            <span style='position: absolute; top: 331.6px; left: 390px;'>|</span>
            <span style='position: absolute; top: 331.6px; left: 410px;'>|</span>
            <span style='position: absolute; top: 355px; left: 56px; font-size: 10px;'>(figure sur le 1 er volet du certificat d’immatriculation de type AB-123-CD) <br>
            <span style='position: absolute; top: 10px; left: 5px; font-size: 13px;'>ou (I) date du certificat d’immatriculation  </span><br>
            <span style='position: absolute; top: 24px; left: 5px; font-size: 9px;'>(si ancien format d’immatriculation de type 123 AB 45) </span> </span>
        </div>


        <div style='position:absolute; left: -120px; top: -60px;'>
            <div style='border-bottom: 1px solid black; width: 44.5px; position: absolute; top: 380px; left: 400px;'></div>
            <span  style='position: absolute; top: 365.8px; left: 398.7px;'>|</span>
            <span  style='position: absolute; top: 365.8px; left: 418.7px;'>|</span>
            <span  style='position: absolute; top: 365.8px; left: 438.7px;'>|</span>
            <div style='border-bottom: 1px solid black; width: 44.5px; position: absolute; top: 380px; left: 460px;'></div>
            <span  style='position: absolute; top: 365.8px; left: 458.7px;'>|</span>
            <span  style='position: absolute; top: 365.8px; left: 478.7px;'>|</span>
            <span  style='position: absolute; top: 365.8px; left: 498.7px;'>|</span>
            <div style='border-bottom: 1px solid black; width: 84.6px; position: absolute; top: 380px; left: 518px;'></div>
            <span style='position: absolute; top: 365.8px; left: 516.7px;'>|</span>
            <span style='position: absolute; top: 365.8px; left: 536.7px;'>|</span>
            <span style='position: absolute; top: 365.8px; left: 556.7px;'>|</span>
            <span style='position: absolute; top: 365.8px; left: 576.7px;'>|</span>
            <span style='position: absolute; top: 365.8px; left: 596.7px;'>|</span>
        </div>
        <div style='position: absolute; left: -40px; top: -20px;'>
            <div style='border-bottom: 1px solid black; width: 214px; position: absolute; top: 340px; left: 528px;'></div>
            <div style='border-bottom: 1px solid black; width: 214px; position: absolute; top: 320px; left: 528px;'></div>
            <span><input style=' position: absolute; top: 290px; left: 528px;' type='checkbox'></span>
            <span style=' position: absolute; top: 294px; left: 547px; font-size: 8px;'>NON – Motif d’absence de certificat d’immatriculation :</span>
        </div>

            <div style='border: 2px solid #0B368C; position: absolute; height: 200px; width: 730px; top: 136px;   z-index: 1;' ></div>

        <div>
        
        </div>



      <div style=' position: absolute; height: 20px; width: 320px; left: 25px; top: 130px; background-color: #fff; color: #0B368C; font-weight: bold;  z-index: 1; text-align: center;'> LE VÉHICULE (à remplir par l’ancien propriétaire)</div> 
        <!-- Border pour la parti Ancien propriétaire  -->  
        <div style='border: 2px solid  #0B368C; position: absolute; height: 410px; width: 730px; top: 355px; z-index: 1;' ></div>
      
       
        <div style=' position: absolute; height: 20px; width: 150px; left: 25px; top: 347px; background-color: #fff; color: #0B368C; font-weight: bold;  z-index: 2; text-align: center;'>Ancien propriétaire</div>

        <!-- Border pour la parti Nouveu propriétaire  -->  
        <div style='border: 2px solid  #0B368C; position: absolute; height: 300px; width: 730px; top: 788px; z-index: 1;' ></div>
        <div style=' position: absolute; height: 20px; width: 150px; left: 25px; top: 780px; background-color: #fff; color: #0B368C; font-weight: bold;  z-index: 2; text-align: center;'>Nouveau propriétaire</div>

        <div style='position: absolute; top: -145px; font-size: 13px; left: -25px;'>
            <input style='position: absolute; left: 35px; top: 520px;' type='checkbox'>
            <span style='position: absolute; font-weight: bold; left: 50px; top: 520px;'>Personne physique ou entreprise morale</span>
            <div style='position: absolute;  border-bottom: 1px solid black; width: 10px; top: 528px; left: 320px;'></div>
            <span style='position: absolute; font-weight: bold; left: 340px; top: 520px;'>Sexe :</span>
            <span style='position: absolute; font-weight: bold; left: 390px; top: 520px;'>M</span>
            <span style='position: absolute; font-weight: bold; left: 410px; top: 520px;'><input type='checkbox' ></span>
            <span style='position: absolute; font-weight: bold; left: 450px; top: 520px;'>F</span>
            <span style='position: absolute; font-weight: bold; left: 465px; top: 520px;'><input type='checkbox' ></span>
            <input style='position: absolute; left: 35px; top: 540px;' type='checkbox'>
            <span style='position: absolute; font-weight: bold; left: 50px; top: 540px;'>Personne morale</span>
        </div>

        <div style='position: absolute; top: -150px; left: -25px;'>
            <span style='position: absolute;  left: 35px; top: 580px;'>Je soussigné(e),</span>
            <div style='position: absolute; border-bottom: 1px solid black; width: 310px; top: 590px; left: 150px;' ></div>
            <span style='position: absolute;  left: 148px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 454px; top: 580px; top: 576.5px;'>|</span>
            <div style='position: absolute; border-bottom: 1px solid black; width: 283px; top: 590px; left: 470px;' ></div>
            <span style='position: absolute;  left: 468px; top: 50px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 488px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 508px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 528px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 548px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 568px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 588px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 608px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 628px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 648px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 668px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 688px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 708px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 728px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 748px; top: 580px; top: 576.5px;'>|</span>
            <span style='position: absolute;  left: 149px; top: 592px; font-size: 9px;'>NOM, NOM D’USAGE le cas échéant et PRÉNOM ou RAISON SOCIALE </span>
            <span style='position: absolute;  left: 470px; top: 592px; font-size: 9px;'>N° SIRET, (le cas échéant) </span>
        </div>
        <div>
        
    
        </div>

        <div style='position: absolute;  top: -150px; left: -25px;'>
            <span style='position: absolute;  left: 35px; top: 620px; font-size: 15px;'>Adresse complète :</span>
            <span style='position: absolute;  left: 174px; top: 614.5px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 254px; top: 614.5px; font-size: 15px;'>|</span>
            <div style='border-bottom: 1px solid black; position: absolute; width: 80px; top: 630px; left: 180px;' ></div>
            <div style='border-bottom: 1px solid black; position: absolute; width: 80px; top: 630px; left: 270px;' ></div>
            <span style='position: absolute;  left: 268px; top: 614.5px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 343.5px; top: 614.5px; font-size: 15px;'>|</span>
            <div style='border-bottom: 1px solid black; position: absolute; width: 150px; top: 630px; left: 360px;' ></div>
            <span style='position: absolute;  left: 358px; top: 614.5px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 504px; top: 614.5px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 179px; top: 632px; font-size: 10px;'>N° de la voie</span>
            <span style='position: absolute;  left: 265px; top: 632px; font-size: 9px;'>Extension (bis, ter, .)</span>
            <span style='position: absolute;  left: 356px; top: 632px; font-size: 9px;'>Type de voie (avenue, etc.)</span>
            <div style='border-bottom: 1px solid black; position: absolute; width: 230px; top: 630px; left: 520px;' ></div>
            <span style='position: absolute;  left: 518px; top: 614.5px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 743.5px; top: 614.5px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 520px; top: 632px; font-size: 9px;'>Nom de la voie</span>
            <div style='border-bottom: 1px solid black; position: absolute; width: 85px; top: 670px; left: 179px;' ></div>
            <span style='position: absolute;  left: 177px; top: 654.6px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 197px; top: 654.6px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 217px; top: 654.6px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 237px; top: 654.6px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 257px; top: 654.6px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 174px; top: 672px; font-size: 10px;'>Code postal</span>
            <div style='border-bottom: 1px solid black; position: absolute; width: 480px; top: 670px; left: 270px;' ></div>
            <span style='position: absolute;  left: 267.5px; top: 654.6px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 743.5px; top: 654.6px; font-size: 15px;'>|</span>
            <span style='position: absolute;  left: 270px; top: 672px; font-size: 10px;'>Commune</span>
        </div>





        <div style='position: absolute;  top: -160px; left: -28px;'>
            <span style='position: absolute;  left: 35px; top: 700px; font-size: 15px; font-weight: bold;'>Certifie</span>
            <span style='position: absolute;  left: 90px; top: 700px; font-size: 10px;'>(veuillez cocher la case correspondante) :</span>
            <span style='position: absolute;  left: 290px; top: 700px; font-size: 10px;'><input type='checkbox'; ></span>
            <span style='position: absolute;  left: 310px; top: 700px; font-size: 10px; font-weight: bold;'>céder</span>
            <span style='position: absolute;  left: 370px; top: 700px; font-size: 10px; font-weight: bold;'><input type='checkbox'; ></span>
            <span style='position: absolute;  left: 390px; top: 700px; font-size: 10px; font-weight: bold;'>céder pour destruction</span>
        </div>



        <div style='position: absolute;  top: -170px; left: -28px;'>
            <span style='position: absolute;  left: 35px; top: 742px; font-size: 15px; font-weight: bold;'>Le</span>
            <div style='border-bottom: 1px solid black; width: 44.5px; position: absolute; top: 752px; left: 70px;'></div>
            <div style='border-bottom: 1px solid black; width: 41px; position: absolute; top: 752px; left: 120px;'></div>
            <div style='border-bottom: 1px solid black; width: 81px; position: absolute; top: 752px; left: 170px;'></div>
            <div style='border-bottom: 1px solid black; width: 41px; position: absolute; top: 752px; left: 340px;'></div>
            <span style='position: absolute; top: 720px; left: 68.8px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 88.8px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 108.8px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 115px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 135px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 155px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 165px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 185px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 205px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 225px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 245px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 254px; top: 738px; ' >à</span>
            <div style='border-bottom: 1px solid black; width: 44.5px; position: absolute; top: 752px; left: 270px;'></div>
            <span style='position: absolute; top: 720px; left: 268.8px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 288.8px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 308.8px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 324px; top: 739px; ' >h</span>
            <span style='position: absolute; top: 720px; left: 335px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 355px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 375px; top: 738px; ' >|</span>
            <span style='position: absolute; top: 720px; left: 385px; top: 738px; ' >le véhicule désigné ci-dessus</span>
            <span style='position: absolute;  left: 35px; top: 762px; font-size: 14px;'>Je certifie en outre</span>
            <span style='position: absolute;  left: 155px; top: 763px; font-size: 10px;'>(veuillez cocher la case correspondante):</span>
            <span style='position: absolute;  left: 40px; top: 785px; font-size: 14px;'><input type='checkbox' ></span>
            <span style='position: absolute;  left: 60px; top: 785px; font-size: 11px;'>Avoir remis au nouveau propriétaire un certificat établi depuis moins de quinze jours par le ministre de l’Intérieur, </span>
            <span style='position: absolute;  left: 60px; top: 797px; font-size: 11px;'>    attestant à sa date
            d’édition de la situation administrative du véhicule ;</span>
            <span style='position: absolute;  left: 40px; top: 815px; font-size: 14px;'><input type='checkbox' ></span>
            <span style='position: absolute;  left: 60px; top: 815px; font-size: 11px;'>Que ce véhicule n’a pas subi de transformation notable susceptible de modifier les indications du certificat de conformité </span>
            <span style='position: absolute;  left: 60px; top: 826px; font-size: 11px;'>ou de l’actuelcertificat d’immatriculation ;</span>
            <span style='position: absolute;  left: 40px; top: 845px; font-size: 14px;'><input type='checkbox' ></span>
            <span style='position: absolute;  left: 60px; top: 847px; font-size: 11px;'>Que ce véhicule est cédé pour destruction à un professionnel de la destruction des véhicules hors d’usage (VHU)</span>
            <span style='position: absolute;  left: 60px; top: 860px; font-size: 11px;'>portant le n° d’agrément : __________________________. (Le numéro d’agrément VHU du professionnel acquéreur </span>
            <span style='position: absolute;  left: 60px; top: 877px; font-size: 11px;'> est obligatoire si le véhicule est une voiture particulière, une camionnette ou un cyclomoteur à trois roues.</span>
            <span style='position: absolute;  left: 60px; top: 888px; font-size: 11px;'>La liste des professionnels agréés est disponible sur https://immatriculation.ants.gouv.fr).</span>
            <span style='position: absolute;  left: 60px; top: 900px; font-size: 11px; font-weight: bold;'>Fait à _______________________ , le_________________  </span>
        
           
        </div>

        <!-- Signature -->
        <div style='position: absolute; width: 300px; left: 500px; top: 720px;'>
            <span style='position: absolute;   font-size: 12px; '>Signature de l’ancien propriétaire,</span>
            <span style='position: absolute;  top: 10px; left: 20px; font-size: 9px; width: 300px; '>(Pour les sociétés : nom et qualité</span>
            <span style='position: absolute; top: 20px;  left: 35px; font-size: 9px; '>du signataire et cachet)</span>
        </div>


        <!-- Signature -->
        <div style='position: absolute; width: 300px; left: 500px; top: 1040px;'>
            <span style='position: absolute;   font-size: 12px; '>Signature de l’ancien propriétaire,</span>
            <span style='position: absolute;  top: 10px; left: 20px; font-size: 9px; width: 300px; '>(Pour les sociétés : nom et qualité</span>
            <span style='position: absolute; top: 20px;  left: 35px; font-size: 9px; '>du signataire et cachet)</span>
        </div>

        <div  style='position: absolute;  top: -50px;'>
            <span  style='position: absolute; left: 15px; top: 850px;'><input type='checkbox' ></span> 
            <span  style='position: absolute; left: 28px; top: 850px; font-weight: bold;'>Personne physique ou entreprise morale — Sexe :</span> 
            <span  style='position: absolute; left: 358px; top: 850px; font-weight: bold;'>M</span> 
            <span  style='position: absolute; left: 378px; top: 850px; font-weight: bold;'><input type='checkbox' ></span> 
            <span  style='position: absolute; left: 398px; top: 850px; font-weight: bold;'>F</span> 
            <span  style='position: absolute; left: 418px; top: 850px; font-weight: bold;'><input type='checkbox' ></span> 
            <span  style='position: absolute; left: 15px; top: 870px;'><input type='checkbox' ></span> 
            <span  style='position: absolute; left: 28px; top: 870px; font-weight: bold;'>Personne morale</span> 
        </div>
    

    <div  style='position: absolute;  top: -40px;'>
        <span  style='position: absolute; left: 15px; top: 890px;'>Je soussigné(e),</span> 
        <div style='position: absolute; top: -30px;'>
        <span  style='position: absolute; left: 403px; top: 915.8px;'>|</span>
        <span  style='position: absolute; left: 120px; top: 915.8px;'>|</span>  
        <div style='position: absolute; border-bottom: 1px solid black; width: 280px; left: 125px; top: 930px;' ></div>
        </div>
        <div style='position: absolute; top: -30px; left: -10px;'>
            <div style='position: absolute; border-bottom: 1px solid black; width: 284.7px; left: 435px; top: 930px;' ></div>
            <span  style='position: absolute; left: 433.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 453.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 473.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 493.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 513.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 533.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 553.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 573.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 593.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 613.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 633.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 653.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 673.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 693.7px; top: 915.8px;'>|</span> 
            <span  style='position: absolute; left: 713.7px; top: 915.8px;'>|</span> 
        </div>
    </div>




        <div style='position: absolute; top: -60px;'>
            <span  style='position: absolute; left: 15px; top: 940px;'>Né (e) le,</span> 
            <span  style='position: absolute; left: 79px; top: 936.5px;'>|</span> 
            <span  style='position: absolute; left: 99px; top: 936.5px;'>|</span> 
            <span  style='position: absolute; left: 119px; top: 936.5px;'>|</span> 
            <div style='border-bottom: 1px solid black; width: 40px; position: absolute; left: 85px; top: 950px;'></div>
            <span  style='position: absolute; left: 133px; top: 936.5px;'>|</span>
            <span  style='position: absolute; left: 153px; top: 936.5px;'>|</span>
            <span  style='position: absolute; left: 173px; top: 936.5px;'>|</span>
            <div style='border-bottom: 1px solid black; width: 44px; position: absolute; left: 135px; top: 950px;'></div>
            <div style='border-bottom: 1px solid black; width: 84px; position: absolute; left: 195px; top: 950px;'></div>
            <span  style='position: absolute; left: 193px; top: 936.5px;'>|</span>
            <span  style='position: absolute; left: 213px; top: 936.5px;'>|</span>
            <span  style='position: absolute; left: 233px; top: 936.5px;'>|</span>
            <span  style='position: absolute; left: 253px; top: 936.5px;'>|</span>
            <span  style='position: absolute; left: 273px; top: 936.5px;'>|</span>
            <span  style='position: absolute; left: 283px; top: 936.5px;'>à</span>
            <span  style='position: absolute; left: 300px; top: 936.5px;'>|</span>
            <span  style='position: absolute; left: 714px; top: 936.5px;'>|</span>
            <div style='border-bottom: 1px solid black; width: 414px; position: absolute; left: 305px; top: 950px;'></div>
        </div>
     


      <div style='position: absolute;  top: 300px; left: -20px; font-size: 14px;'>
        <span style='position: absolute;  left: 35px; top: 620px; font-size: 15px;'>Adresse complète :</span>
        <span style='position: absolute;  left: 174px; top: 614.5px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 254px; top: 614.5px; font-size: 15px;'>|</span>
        <div style='border-bottom: 1px solid black; position: absolute; width: 80px; top: 630px; left: 180px;' ></div>
        <div style='border-bottom: 1px solid black; position: absolute; width: 80px; top: 630px; left: 270px;' ></div>
        <span style='position: absolute;  left: 268px; top: 614.5px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 343.5px; top: 614.5px; font-size: 15px;'>|</span>
        <div style='border-bottom: 1px solid black; position: absolute; width: 150px; top: 630px; left: 360px;' ></div>
        <span style='position: absolute;  left: 358px; top: 614.5px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 504px; top: 614.5px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 179px; top: 632px; font-size: 10px;'>N° de la voie</span>
        <span style='position: absolute;  left: 265px; top: 632px; font-size: 9px;'>Extension (bis, ter, .)</span>
        <span style='position: absolute;  left: 356px; top: 632px; font-size: 9px;'>Type de voie (avenue, etc.)</span>
        <div style='border-bottom: 1px solid black; position: absolute; width: 220px; top: 630px; left: 520px;' ></div>
        <span style='position: absolute;  left: 518px; top: 614.5px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 743.5px; top: 614.5px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 520px; top: 632px; font-size: 9px;'>Nom de la voie</span>
        <div style='border-bottom: 1px solid black; position: absolute; width: 85px; top: 670px; left: 179px;' ></div>
        <span style='position: absolute;  left: 177px; top: 654.6px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 197px; top: 654.6px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 217px; top: 654.6px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 237px; top: 654.6px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 257px; top: 654.6px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 174px; top: 672px; font-size: 10px;'>Code postal</span>
        <div style='border-bottom: 1px solid black; position: absolute; width: 480px; top: 670px; left: 270px;' ></div>
        <span style='position: absolute;  left: 267.5px; top: 654.6px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 743.5px; top: 654.6px; font-size: 15px;'>|</span>
        <span style='position: absolute;  left: 270px; top: 672px; font-size: 10px;'>Commune</span>
    </div>
    <div style='position: absolute; top: -35px; '>
        <span style='position: absolute;  left: 15px; top: 1020px; font-size: 15px; font-weight: bold;'>Certifie</span>
        <span style='position: absolute;  left: 65px; top: 1025px; font-size: 10px; '>(veuillez cocher la case correspondante) : </span>
        <span style='position: absolute;  left: 15px; top: 1045px;'><input type='checkbox' > </span>
        <span style='position: absolute;  left: 30px; top: 1045px; font-size: 12px; font-weight: bold;'>Acquérir le véhicule désigné ci-dessus aux dates et heures indiquées par l’ancien propriétaire ; </span>
        <span style='position: absolute;  left: 15px; top: 1065px;'><input type='checkbox' > </span>
        <span style='position: absolute;  left: 30px; top: 1065px; font-size: 12px; font-weight: bold;'>Avoir été informé de la situation administrative du véhicule. </span>
        <span style='position: absolute;  left: 30px; top: 1090px; font-size: 12px; '>Fait à _______________________, le_________________ </span>


    </div>
    <div style='position: absolute; width: 750px; text-align: center; top: 1100px;'>
        <span style='font-weight: bold;' >Je m’oppose à la réutilisation de mes données personnelles à des fins de prospection commerciale <input type='checkbox' > </span>
    
    </div>

   </div>

";

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output();


?>