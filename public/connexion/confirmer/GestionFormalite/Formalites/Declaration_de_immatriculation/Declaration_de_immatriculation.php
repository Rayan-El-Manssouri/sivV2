<?php 
require '../../../../../../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$html2pdf = new Html2Pdf();


// Top des bouttun
$top_button_radio = "60px";
$top_button_radio2 = "80px";
$font_size_formaliter = "10px";
$top_text_formaliter = "60px";
$top_text_formaliter_2 = "79px";

// Top Grand titre
$top_grand_titre_vehicule = "110px";
$top_grand_titre_titulaire = "320px";
$top_grand_titre_loueur = "585px";
$top_grand_titre_locataire = "763px";


// Top block



$html = "
    <div  style='position: absolute;  top: 10px;'>
        <!-- Logo ministére de l'intérieure -->
        <img src='../asset/pdf/logo.jpg' style='width: 60.5px; top: -2px; left: 16px; position: absolute;' >
        <!-- Titre -->
        <span style='position: absolute; left: 110px;  color: #0B368C; font-size: 17px; font-weight: bold; top: -45px;'>DEMANDE DE CERTIFICAT D’IMMATRICULATION D’UN VÉHICULE <br></span>
        <span style='position: absolute; top: 25px; left: 245px;  font-size: 13px;'>Articles R. 322-1 et suivants du code de la route <br> </span>
        <span style='position: absolute; top: 43px; left: 256px; font-size: 12px; font-weight: bold;'>Veuillez cocher la case correspondante :</span>

        <!-- Logo cerfa  -->
        <img src='../asset/pdf/logo_cerfa.png' style='position: absolute; width: 55px; left: 670px;' >

        <!-- Identifcation du pdf par un numéro attribuer du cerfa -->
        <span style='position: absolute; font-weight: bold; left: 655px; top: 26px;'>N° 13750*05</span>

        <!-- Formalité choisi -->
        <span style='position: absolute; left: 160px; top: $top_button_radio;'><input type='radio'  ></span>
        <span style='position: absolute; left: 175px; top: $top_text_formaliter; color: #0B368C; font-weight: bold; font-size: $font_size_formaliter;'>Certificat</span>

        <span style='position: absolute; left: 250px; top: $top_button_radio;'><input type='radio'  ></span>
        <span style='position: absolute; left: 265px; top: $top_text_formaliter; color: #0B368C; font-weight: bold; font-size: $font_size_formaliter;'>Duplicata</span>

        <span style='position: absolute; left: 340px; top: $top_button_radio;'><input type='radio'  ></span>
        <span style='position: absolute; left: 355px; top: $top_text_formaliter; color: #0B368C; font-weight: bold;  font-size: $font_size_formaliter;'>Correction</span>
        <span style='position: absolute; left: 440px; top: $top_button_radio;'><input type='radio'  ></span>
        <span style='position: absolute; left: 455px; top: $top_text_formaliter; color: #0B368C; font-weight: bold;  font-size: $font_size_formaliter;'>Changement de domicile</span>

        <span style='position: absolute; left: 80px; top: $top_button_radio2;'><input type='radio'  ></span>
        <span style='position: absolute; left: 92px; top: $top_text_formaliter_2; color: #0B368C; font-weight: bold; font-size: $font_size_formaliter;'>Changement d’état civil ou d’état matrimonial de domicile</span>

        <span style='position: absolute; left: 400px; top: $top_text_formaliter_2; color: #0B368C; font-weight: bold;  font-size: $font_size_formaliter;'>Changement des caractéristiques techniques du véhicule </span>
        <span style='position: absolute; left: 380px; top: $top_button_radio2;'><input type='radio'  ></span>
    </div>

    <!-- Grand titre -->
    <div style='position: absolute;  top: $top_grand_titre_vehicule; background-color: #0B368C; color: #fff; padding: 1px; left: 16px; width: 720px;'><span style='position: absolute; top: 2px; left: 10px;'>VÉHICULE</span></div>
    <div style='position: absolute;  top: $top_grand_titre_titulaire; background-color: #0B368C; color: #fff; padding: 1px; left: 16px; width: 720px;'><span style='position: absolute; top: 2px; left: 10px;'>TITULAIRE</span></div>   
    <div style='position: absolute;  top: $top_grand_titre_loueur; background-color: #0B368C; color: #fff; padding: 1px; left: 16px; width: 720px;'><span style='position: absolute; top: 2px; left: 10px;'>LOUEUR (en cas de location longue durée ou crédit-bail)</span></div>  
    <div style='position: absolute;  top: $top_grand_titre_locataire; background-color: #0B368C; color: #fff; padding: 1px; left: 16px; width: 720px;'><span style='position: absolute; top: 2px; left: 10px;'>LOCATAIRE (en cas de location longue durée ou crédit-bail)</span></div>
    
    <!-- Hors titre -->
    <div style='position: absolute;  top: 946px; background-color: #0B368C; color: #fff; padding: 1px; left: 559px; width: 176px;'><span style='position: absolute; top: 2px; left: 2px; padding: 3px;'>CADRE RÉSERVÉ À <br>
    L’ADMINISTRATION</span></div>


    <!-- Border par titre -->
    <div style='border: 1px solid #0B368C ; left: 16px; top: 110px; position: absolute;   color: #fff; padding: 50px;  width: 620px; height: 109px;' name='vehicule' ></div> 
    <div style='border: 1px solid #0B368C ; left: 16px; top: 335px; position: absolute;   color: #fff; padding: 50px;  width: 620px; height: 167px;' name='titulaire' ></div> 
    <div style='border: 1px solid #0B368C ; left: 16px; top: 600px; position: absolute;   color: #fff; padding: 50px;  width: 620px; height: 78px;'  name='loeur' ></div> 
    <div style='border: 1px solid #0B368C ; left: 16px; top: 780px; position: absolute;   color: #fff; padding: 50px;  width: 620px; height: 65px;'  name='LOCATAIRE ' ></div> 


    <!-- 1er block -->
    <div style='position: absolute; top: -45px;'>
        <span style='position: absolute; top: 173px; left: 20px;'>|</span>
        <span style='position: absolute; top: 173px; left: 18px;'>_________________</span>
        <span style='position: absolute; top: 173px; left: 142px;'>|</span>
        <span style='position: absolute; top: 185px; left: 18px; font-size: 8px;'>(A) Numéro d’immatriculation actuel</span>
        <div style='position: absolute; top: 186px; left: 167.3px; border-bottom: black; width: 24.3px;'></div>
        <div style='position: absolute; top: 186px; left: 187.3px; border-bottom: black; width: 24.3px;'></div>
        <div style='position: absolute; top: 186px; left: 217.3px; border-bottom: black; width: 24.3px;'></div>
        <div style='position: absolute; top: 186px; left: 237.3px; border-bottom: black; width: 23px;'></div>
        <div style='position: absolute; top: 186px; left: 267.3px; border-bottom: black; width: 23px;'></div>
        <div style='position: absolute; top: 186px; left: 287.3px; border-bottom: black; width: 23px;'></div>
        <div style='position: absolute; top: 186px; left: 307.3px; border-bottom: black; width: 23px;'></div>
        <span style='position: absolute; top: 173px; left: 166px;'>|</span>
        <span style='position: absolute; top: 173px; left: 186px;'>|</span>
        <span style='position: absolute; top: 173px; left: 206px;'>|</span>
        <span style='position: absolute; top: 173px; left: 212px;'>|</span>
        <span style='position: absolute; top: 173px; left: 232px;'>|</span>
        <span style='position: absolute; top: 173px; left: 255px;'>|</span>
        <span style='position: absolute; top: 173px; left: 262px;'>|</span>
        <span style='position: absolute; top: 173px; left: 284.3px;'>|</span>
        <span style='position: absolute; top: 173px; left: 304.3px;'>|</span>
        <span style='position: absolute; top: 173px; left: 324.3px;'>|</span>
        <span style='position: absolute; top: 190px; left: 186px; font-size: 8px;'>Date d’achat, le cas échéant </span>
        <div style='position: absolute; top: 186px; left: 347.3px; '>
            <div style='position: absolute; border-bottom: black; width: 44.3px;'></div>
            <span style='position: absolute; top: -13px; left: -2px;'>|</span>
            <span style='position: absolute; top: -13px; left: 18px;'>|</span>
            <span style='position: absolute; top: -13px; left: 38px;'>|</span>
            <div style='position: absolute; border-bottom: black; width: 44.3px;  left: 50px;'></div>
            <span style='position: absolute; top: -13px; left: 48px;'>|</span>
            <span style='position: absolute; top: -13px; left: 68px;'>|</span>
            <span style='position: absolute; top: -13px; left: 88px;'>|</span>
            <div style='position: absolute; border-bottom: black; width: 84.3px;  left: 100px;'></div>
            <span style='position: absolute; top: -13px; left: 98px;'>|</span>
            <span style='position: absolute; top: -13px; left: 118px;'>|</span>
            <span style='position: absolute; top: -13px; left: 138px;'>|</span>
            <span style='position: absolute; top: -13px; left: 158px;'>|</span>
            <span style='position: absolute; top: -13px; left: 178px;'>|</span>
            <span style='position: absolute; font-size: 8px; top: 5px; left: 40px;'>(I) Date de certificat actuel</span>
        </div>
        <div style='position: absolute; top: 186px; left: 547.3px; '>
            <div style='position: absolute; border-bottom: black; width: 44.3px;'></div>
            <span style='position: absolute; top: -13px; left: -2px;'>|</span>
            <span style='position: absolute; top: -13px; left: 18px;'>|</span>
            <span style='position: absolute; top: -13px; left: 38px;'>|</span>
            <div style='position: absolute; border-bottom: black; width: 44.3px;  left: 50px;'></div>
            <span style='position: absolute; top: -13px; left: 48px;'>|</span>
            <span style='position: absolute; top: -13px; left: 68px;'>|</span>
            <span style='position: absolute; top: -13px; left: 88px;'>|</span>
            <div style='position: absolute; border-bottom: black; width: 84.3px;  left: 100px;'></div>
            <span style='position: absolute; top: -13px; left: 98px;'>|</span>
            <span style='position: absolute; top: -13px; left: 118px;'>|</span>
            <span style='position: absolute; top: -13px; left: 138px;'>|</span>
            <span style='position: absolute; top: -13px; left: 158px;'>|</span>
            <span style='position: absolute; top: -13px; left: 178px;'>|</span>
            <span style='position: absolute; font-size: 8px; top: 5px; left: 40px;'>(I) Date de certificat actuel</span>
        </div>
    </div>

    <div style='position: absolute; top: -55px;'>
        <div style='position: absolute;  top: 205px; left: 20px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_______________________</span>
            <span style='position: absolute; left: 166.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px;'>Numéro de formule du certificat d’immatriculation *</span>
            <span style='position: absolute;  font-size: 8px; left: 180px;' >(si nouveau format d’immatriculation. Ce numéro figure sur la 1re page</span>
            <span style='position: absolute;  font-size: 8px; top: 13px; left: 180px;' >du certificat d’immatriculation sous la mention « Certificat d’immatriculation »)</span>
        </div>

        <div style='position: absolute;  top: 235px; left: 20px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________</span>
            <span style='position: absolute; left: 181.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 50px;'>Marque (D.1) </span>
        </div>
        
        <div style='position: absolute;  top: 235px; left: 220px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>________________</span>
            <span style='position: absolute; left: 114.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Dénomination commerciale (D.3)</span>
        </div>

        <div style='position: absolute;  top: 265px; left: 20px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>___________________________________________</span>
            <span style='position: absolute; left: 315px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 110px;'>Type variante version (D.2)</span>
        </div>

        <div style='position: absolute;  top: 295px; left: 20px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________</span>
            <span style='position: absolute; left: 181.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 30px;'>Numéro d’identification du véhicule (E)</span>
        </div>

        <div style='position: absolute;  top: 295px; left: 220px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>________________</span>
            <span style='position: absolute; left: 114.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 30px;'>Genre national (J.1)</span>
        </div>

        <div style='position: absolute;  top: 325px; left: 20px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________</span>
            <span style='position: absolute; left: 181.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 10px;'>Numéro d’exploitation agricole, le cas échéant</span>
        </div>

        
        <div style='position: absolute;  top: 355px; left: 20px;'>
            <span style='font-size: 10px; font-weight: bold;'>Si véhicule pris en location, cocher la case correspondante: <span style='font-weight: none; left: 290px; position: absolute; font-size: 9px;'>Véhicule  </span></span>
            <span style='position: absolute; left: 340px; font-size: 9px;'><input type='checkbox' >  en location longue durée</span>
            <span style='position: absolute; left: 460px; font-size: 9px;'><input type='checkbox' >  en location courte durée</span>
            <span style='position: absolute; left: 580px; font-size: 9px;'><input type='checkbox' >  en crédit-bail</span>
        </div>
        <div style='position: absolute; left: 370px; top: 220px;'>
            <h1 style='font-size: 12px;'>COULEUR DOMINANTE</h1>
            <span style='font-size: 10px; position: absolute; top: 17px; left: 140px;'>(Veuillez cocher les cases correspondantes)</span>
        </div>
        <div style='position: absolute; left: 400px; top: 260px;' >
            <div style='border: 1px solid black; width: 30px; height: 50px;   padding: 20px;' ></div>
            <div style='border: 1px solid black; width: 150px; height: 50px;   padding: 20px; position: absolute; left: 72px;' ></div>
        </div>

        <div style='position: absolute;  left: 410px; top: 270px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Clair</span>
        </div>
        
        <div style='position: absolute;  left: 410px; top: 310px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Foncé</span>
        </div>

        
        <div style='position: absolute;  left: 480px; top: 270px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Noir</span>
        </div>

        <div style='position: absolute;  left: 540px; top: 270px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Jaune</span>
        </div>

        <div style='position: absolute;  left: 600px; top: 270px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Gris</span>
        </div>


        <div style='position: absolute;  left: 480px; top: 290px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Marron</span>
        </div>

        
        <div style='position: absolute;  left: 540px; top: 290px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Vert</span>
        </div>


        <div style='position: absolute;  left: 480px; top: 310px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Rouge</span>
        </div>


        <div style='position: absolute;  left: 540px; top: 310px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Bleu</span>
        </div>

        <div style='position: absolute;  left: 480px; top: 330px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Orange</span>
        </div>

        <div style='position: absolute;  left: 540px; top: 330px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Beige</span>
        </div>

        <div style='position: absolute;  left: 600px; top: 290px;'>
            <input type='checkbox' >
            <span style='position: absolute; left: 22px; font-size: 9px;'>Blanc</span>
        </div>
    </div>


    <!-- 2er block -->
    <div style='position: absolute; top: -70px;'>
        <!-- Choix personne -->
        <span  style='position: absolute;  top: 410px; font-weight: bold; font-size: 12px; left: 75px;'>Personne physique    <input type='checkbox' ></span>
        <span  style='position: absolute;  top: 410px; font-size: 12px; left: 225px;'>Sexe :  M    <input type='checkbox' ></span>
        <span  style='position: absolute;  top: 410px; font-size: 12px; left: 320px;'>F   <input type='checkbox' ></span>
        <span  style='position: absolute;  top: 410px; font-size: 12px; left: 400px; font-weight: bold;'>Personne morale <input type='checkbox' ></span>

        <!-- N° SIREN, le cas échéant -->
        <div style='position: absolute;  '>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 534px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 550px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 570px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 590px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 610px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 630px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 650px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 670px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 690px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 710px;'>|</span>
            <div style='border-bottom: 1px solid black; width: 180px;  top: 423px; left: 535px; position: absolute;' ></div>
            <span  style='position: absolute;  top: 428px; font-size: 9px; left: 550px;'>N° SIREN, le cas échéant</span>
        </div>
    

        <span  style='position: absolute;  top: 440px; font-weight: bold; font-size: 12px; left: 25px;'> Titulaire</span>

        <div style='position: absolute;  top: 440px; left: 80px;  '>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>____________________________________________________________</span>
            <span style='position: absolute; left: 440.6px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 10px;'>Numéro d’exploitation agricole, le cas échéant</span>
        </div>

        <div style='position:absolute; top: 31px; '>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 534px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 550px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 570px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 590px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 610px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 630px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 650px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 670px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 690px;'>|</span>
            <span  style='position: absolute;  top: 410px; font-size: 12px; left: 710px;'>|</span>
            <div style='border-bottom: 0.5px solid black; width: 180px;  top: 422.5px; left: 535.5px; position: absolute;' ></div>
            <span style='position: absolute; top: 425px; font-size: 8px; left: 540px;'>NOM D’USAGE (facultatif) : nom d’époux (se)</span>

        </div>

        <span  style='position: absolute;  top: 470px; left: 25px;'> Né le </span>
        <div style='position: absolute; top: 480px; left: 67.3px;  font-weight: 100; '>
            <div style='position: absolute; border-bottom: 0.7px black; width: 44.3px; top: 1px; left: -0.5px;'></div>
            <span style='position: absolute; top: -13px; left: -2px;'>|</span>
            <span style='position: absolute; top: -13px; left: 18px;'>|</span>
            <span style='position: absolute; top: -13px; left: 38px;'>|</span>
            <div style='position: absolute; border-bottom: 0.7px black; width: 44.3px; top: 1px; left: 49.5px;'></div>
            <span style='position: absolute; top: -13px; left: 48px;'>|</span>
            <span style='position: absolute; top: -13px; left: 68px;'>|</span>
            <span style='position: absolute; top: -13px; left: 88px;'>|</span>
            <div style='position: absolute; border-bottom: 0.7px black; width: 84.3px; top: 1px; left: 99.5px;'></div>
            <span style='position: absolute; top: -13px; left: 98px;'>|</span>
            <span style='position: absolute; top: -13px; left: 118px;'>|</span>
            <span style='position: absolute; top: -13px; left: 138px;'>|</span>
            <span style='position: absolute; top: -13px; left: 158px;'>|</span>
            <span style='position: absolute; top: -13px; left: 178px;'>|</span>
            <span style='position: absolute; font-size: 8px; top: 5px; left: 10px;'>Jour</span>
            <span style='position: absolute; font-size: 8px; top: 5px; left: 60px;'>Mois</span>
            <span style='position: absolute; font-size: 8px; top: 5px; left: 130px;'>Année</span>
        </div>

        <span style='position: absolute; font-size: 12px; top: 468px; left: 260px;'>à</span>


        <div style='position: absolute;  top: 465px; left: 280px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________</span>
            <span style='position: absolute; left: 181.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Commune</span>
        </div>

        <div  style='position: absolute;  top: 465px; left: 480px;' >
            <span style='position: absolute; top: 0.2px;'>|</span>
            <span style='position: absolute; top: 0.2px; left: 20px;'>|</span>
            <span style='position: absolute; top: 0.2px; left: 40px;'>|</span>
            <span style='position: absolute; top: 0.2px; left: 60px;'>|</span>
            <div style='border-bottom: 1px solid black; width: 64.5px; position: absolute; left: 1.4px; top: 14px;' ></div>
        </div>

        <span style='position: absolute; font-size: 8px; top: 480px; left: 495px;'>Département</span>

        <div style='position: absolute;  top: 465px; left: 550px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>______________________</span>
            <span style='position: absolute; left: 160px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Pays</span>
        </div>

        <span  style='position: absolute;  top: 495px; font-weight: bold; font-size: 12px; left: 25px;'> Domicile</span>

        <div style='position: absolute;  top: 495px; left: 85px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
            <span style='position: absolute; left: 300px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Etage / Escalier / Appartement</span>
        </div>
        
        <div style='position: absolute;  top: 495px; left: 395px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>___________________________________________</span>
            <span style='position: absolute; left: 315px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Immeuble / Résidence / Bâtiment</span>
        </div>

        <div style='position: absolute; top: -25px;'>
                <div style='position: absolute;  top: 549px; left: 85px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>_________</span>
                <span style='position: absolute; left: 63.5px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>N° de la voie</span>
            </div>
            <div style='position: absolute;  top: 549px; left: 165px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>_______________</span>
                <span style='position: absolute; left: 108px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Extension (bis, ter,...)</span>
            </div>
            <div style='position: absolute;  top: 549px; left: 285px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>_______________</span>
                <span style='position: absolute; left: 108px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Type de voie (avenue, etc.)</span>
            </div>
            <div style='position: absolute;  top: 549px; left: 405px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>__________________________________________</span>
                <span style='position: absolute; left: 308px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Libellé de voie</span>
            </div>
        </div>

        <div style='position: absolute;  top: 554px; left: 85px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>__________________________________________</span>
            <span style='position: absolute; left: 308px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Lieu-dit / BP / Localité (si différente de la commune)</span>
        </div>
        <div style='position: absolute;  top: 554px; left: 405px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>__________________________________________</span>
            <span style='position: absolute; left: 308px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Tél. portable (recommandé)</span>
        </div>

        <div style='position: absolute;  top: 585px; left: 85px;'>
            <span style='position: absolute;'>|</span>
            <span style='position: absolute; left: 20px;'>|</span>
            <span style='position: absolute; left: 40px;'>|</span>
            <span style='position: absolute; left: 60px;'>|</span>
            <span style='position: absolute; left: 80px;'>|</span>
            <span style='position: absolute; left: 100px;'>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>______________</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Code postal</span>
        </div>
        <div style='position: absolute;  top: 585px; left: 195px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>____________________________</span>
            <span style='position: absolute; left: 203.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Commune</span>
        </div>


        <div style='position: absolute;  top: 585px; left: 413px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
            <span style='position: absolute; left: 300px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Commune</span>
        </div>
        <span style='position: absolute;  top: 610px; left: 25px; font-size: 10px; '>Dans le cas de multi-propriété, veuillez indiquer le nombre de personnes titulaires du certificat d’immatriculation</span>

        <span style='position: absolute;  top: 625px; left: 21px; font-size: 11px; font-weight: bold; '>Co-titulaire</span>
        <span style='position: absolute;  top: 634px; left: 25px; font-size: 8px; '>le cas échéant</span>

   
        <div style='position: absolute;  top: 627px; left: 85px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
            <span style='position: absolute; left: 300px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>NOM DE NAISSANCE et PRÉNOM ou RAISON SOCIALE pour une personne morale</span>
        </div>
        <div style='position: absolute;  top: 627px; left: 395px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>______________________</span>
            <span style='position: absolute; left: 159px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>NOM D’USAGE (facultatif): nom d’époux (se)</span>
        </div>
        <div style='position: absolute;  top: 627px; left: 565px;'>
            <span>|</span>
            <span style='position: absolute; left: 20px;'>|</span>
            <span style='position: absolute; left: 40px;'>|</span>
            <span style='position: absolute; left: 60px;'>|</span>
            <span style='position: absolute; left: 80px;'>|</span>
            <span style='position: absolute; left: 100px;'>|</span>
            <span style='position: absolute; left: 120px;'>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>______________________</span>
            <span style='position: absolute; left: 137px;'>|</span>
            <span style='position: absolute; left: 159px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>N° SIREN, le cas échéant</span>
        </div>
    </div>


    <!-- 3er block -->
    <div style='position: absolute; left: 50px; top: -135px;  '>
        <span  style='position: absolute;  top: 740px; font-weight: bold; font-size: 12px; left: 15px;'>Personne physique    <input type='checkbox' ></span>
        <span  style='position: absolute;  top: 740px; font-size: 12px; left: 155px;'>Sexe: M <input type='checkbox' ></span>
        <span  style='position: absolute;  top: 740px; font-size: 12px; left: 225px;'>F <input type='checkbox' ></span>
        <span  style='position: absolute;  top: 740px; font-size: 12px; left: 300px; font-weight: bold;'>Personne morale <input type='checkbox' ></span>
        <div style='position: absolute; top: 740px;  left: 450px; '>
            <span>|</span>
            <span style='position: absolute; left: 20px'>|</span>
            <span style='position: absolute; left: 40px'>|</span>
            <span style='position: absolute; left: 60px'>|</span>
            <span style='position: absolute; left: 80px'>|</span>
            <span style='position: absolute; left: 100px'>|</span>
            <span style='position: absolute; left: 120px'>|</span>
            <span style='position: absolute; left: 140px'>|</span>
            <span style='position: absolute; left: 160px'>|</span>
            <span style='position: absolute; left: -1.5px; top: 0.4px'>______________________</span>
            <span style='position: absolute; top: 12px; font-size: 9px; left: 20px;' >N° SIREN, le cas échéant</span>
        </div>
        <div style='position: absolute;  top: 759px; left: 25px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_____________________________________________________</span>
            <span style='position: absolute; left: 389px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>NOM DE NAISSANCE et PRÉNOM ou RAISON SOCIALE pour une personne morale</span>
        </div>
        <div style='position: absolute;  top: 759px; left: 435px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>____________________________</span>
            <span style='position: absolute; left: 204px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>NOM D’USAGE (facultatif): nom d’époux (se)</span>
        </div>
        <div style='position: absolute;  top: 789px; left: 25px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>____________________________________________</span>
            <span style='position: absolute; left: 322px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Etage / Escalier / Appartement</span>
        </div>
        <div style='position: absolute;  top: 789px; left: 365px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>______________________________________</span>
            <span style='position: absolute; left: 277px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Etage / Escalier / Appartement</span>
        </div>
        <div style='position: absolute; top: 267px; left: -60px;'>
            <div style='position: absolute;  top: 549px; left: 85px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>_________</span>
                <span style='position: absolute; left: 63.5px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>N° de la voie</span>
            </div>
            <div style='position: absolute;  top: 549px; left: 165px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>_______________</span>
                <span style='position: absolute; left: 108px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Extension (bis, ter,...)</span>
            </div>
            <div style='position: absolute;  top: 549px; left: 285px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>_______________</span>
                <span style='position: absolute; left: 108px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Type de voie (avenue, etc.)</span>
            </div>
            <div style='position: absolute;  top: 549px; left: 405px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
                <span style='position: absolute; left: 300px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Libellé de voie</span>
            </div>
        </div>
        <div style='position: absolute;  top: 842px; left: 27px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
            <span style='position: absolute; left: 300px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Lieu-dit / BP / Localité (si différente de la commune)</span>
        </div>
        <div style='position: absolute;  top: 842px; left: 347px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
            <span style='position: absolute; left: 300px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Tél. portable (recommandé)</span>
        </div>
        <div style='position: absolute;  top: 870px; left: 27px;'>
            <span style='position: absolute;'>|</span>
            <span style='position: absolute; left: 20px;'>|</span>
            <span style='position: absolute; left: 40px;'>|</span>
            <span style='position: absolute; left: 60px;'>|</span>
            <span style='position: absolute; left: 80px;'>|</span>
            <span style='position: absolute; left: 100px;'>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>______________</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Code postal</span>
        </div>
        <div style='position: absolute;  top: 870px; left: 137px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
            <span style='position: absolute; left: 300px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Commune</span>
        </div>
        <div style='position: absolute;  top: 870px; left: 452px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>___________________________</span>
            <span style='position: absolute; left: 197px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Mél (recommandé)</span>
        </div>
    </div>

    <!-- 4er block -->
    <div style='position: absolute; left: 50px; top: 45px;'>
        <span  style='position: absolute;  top: 740px; font-weight: bold; font-size: 12px; left: 15px;'>Personne physique    <input type='checkbox' ></span>
        <span  style='position: absolute;  top: 740px; font-size: 12px; left: 155px;'>Sexe: M <input type='checkbox' ></span>
        <span  style='position: absolute;  top: 740px; font-size: 12px; left: 225px;'>F <input type='checkbox' ></span>
        <span  style='position: absolute;  top: 740px; font-size: 12px; left: 300px; font-weight: bold;'>Personne morale <input type='checkbox' ></span>
        <div style='position: absolute; top: 740px;  left: 450px;'>
            <span>|</span>
            <span style='position: absolute; left: 20px'>|</span>
            <span style='position: absolute; left: 40px'>|</span>
            <span style='position: absolute; left: 60px'>|</span>
            <span style='position: absolute; left: 80px'>|</span>
            <span style='position: absolute; left: 100px'>|</span>
            <span style='position: absolute; left: 120px'>|</span>
            <span style='position: absolute; left: 140px'>|</span>
            <span style='position: absolute; left: 160px'>|</span>
            <span style='position: absolute; left: -1.5px; top: 0.4px'>______________________</span>
            <span style='position: absolute; top: 12px; font-size: 9px; left: 20px;' >N° SIREN, le cas échéant</span>
        </div>
        <div style='position: absolute;  top: 759px; left: 25px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_____________________________________________________</span>
            <span style='position: absolute; left: 389px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>NOM DE NAISSANCE et PRÉNOM ou RAISON SOCIALE pour une personne morale</span>
        </div>
        <div style='position: absolute;  top: 759px; left: 435px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>____________________________</span>
            <span style='position: absolute; left: 204px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>NOM D’USAGE (facultatif): nom d’époux (se)</span>
        </div>
        <div style='position: absolute;  top: 789px; left: 25px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>____________________________________________</span>
            <span style='position: absolute; left: 322px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Etage / Escalier / Appartement</span>
        </div>
        <div style='position: absolute;  top: 789px; left: 365px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>______________________________________</span>
            <span style='position: absolute; left: 277px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Etage / Escalier / Appartement</span>
        </div>
        <div style='position: absolute; top: 267px; left: -60px;'>
            <div style='position: absolute;  top: 549px; left: 85px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>_________</span>
                <span style='position: absolute; left: 63.5px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>N° de la voie</span>
            </div>
            <div style='position: absolute;  top: 549px; left: 165px;'>
                <span>|</span>
                <span style='position: absolute; left: -2px; top: 0.5px;'>_______________</span>
                <span style='position: absolute; left: 108px; top: 0.5px;'>|</span>
                <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Extension (bis, ter,...)</span>
            </div>
        <div style='position: absolute;  top: 549px; left: 285px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_______________</span>
            <span style='position: absolute; left: 108px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Type de voie (avenue, etc.)</span>
        </div>
        <div style='position: absolute;  top: 549px; left: 405px;'>
            <span>|</span>
            <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
            <span style='position: absolute; left: 300px; top: 0.5px;'>|</span>
            <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Libellé de voie</span>
        </div>
    </div>

    <div style='position: absolute;  top: 842px; left: 27px;'>
        <span>|</span>
        <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
        <span style='position: absolute; left: 300px; top: 0.5px;'>|</span>
        <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Lieu-dit / BP / Localité (si différente de la commune)</span>
    </div>
    <div style='position: absolute;  top: 842px; left: 347px;'>
        <span>|</span>
        <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
        <span style='position: absolute; left: 300px; top: 0.5px;'>|</span>
        <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Tél. portable (recommandé)</span>
    </div>
    <div style='position: absolute;  top: 870px; left: 27px;'>
        <span style='position: absolute;'>|</span>
        <span style='position: absolute; left: 20px;'>|</span>
        <span style='position: absolute; left: 40px;'>|</span>
        <span style='position: absolute; left: 60px;'>|</span>
        <span style='position: absolute; left: 80px;'>|</span>
        <span style='position: absolute; left: 100px;'>|</span>
        <span style='position: absolute; left: -2px; top: 0.5px;'>______________</span>
        <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Code postal</span>
    </div>
    <div style='position: absolute;  top: 870px; left: 137px;'>
        <span>|</span>
        <span style='position: absolute; left: -2px; top: 0.5px;'>_________________________________________</span>
        <span style='position: absolute; left: 300px; top: 0.5px;'>|</span>
        <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Commune</span>
    </div>
    <div style='position: absolute;  top: 870px; left: 452px;'>
        <span>|</span>
        <span style='position: absolute; left: -2px; top: 0.5px;'>___________________________</span>
        <span style='position: absolute; left: 197px; top: 0.5px;'>|</span>
        <span style='position: absolute; top: 13px; font-size: 8px; left: 0px;'>Mél (recommandé)</span>
    </div>


    <div style='border: 1px solid #0B368C; width: 75px; left: -34px; position: absolute; padding: 40px; width: 100px; top: 901px; height: 15px; ' ></div>
    <div style='border: 1px solid #0B368C; width: 75px; left: 147px; position: absolute; padding: 40px; width: 100px; top: 901px; height: 15px; ' ></div>
    <div style='border: 1px solid #0B368C; width: 75px; left: 328px; position: absolute; padding: 40px; width: 100px; top: 901px; height: 15px; ' ></div>
    <div style='border: 1px solid #0B368C; width: 75px; left: -34px; position: absolute; padding: 10px; width: 522px; top: 997px; height: 15px; ' ></div>
    <span style='font-size: 9px; position: absolute; top: 1035px; left: -34px; color: #0F41A6; '>* La loi n° 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, garantit un droit d’accès et de rectification des données auprès d’une préfecture de son choix.</span>
    <span style='font-size: 9px; position: absolute; top: 1045px; left: -34px; color: #0F41A6; '>** Uniquement pour les personnes physiques</span>
    <span style='position: absolute; top: 905px; left: 20px; font-weight: bold;'>Le titulaire</span>
    <span style='position: absolute; top: 925px; left: -30px; font-size: 9px; '>Fait à : ...................... Le : ....................... </span>
    <span style='position: absolute; top: 935px; left: -30px; font-size: 9px; '>Signature :</span>
    <span style='position: absolute; top: 905px; left: 210px; font-weight: bold;'>Le loueur</span>
    <span style='position: absolute; top: 918px; left: 150px; font-size: 9px; '>(Société de location en cas de crédit-bail)</span>
    <span style='position: absolute; top: 928px; left: 150px; font-size: 9px; '>Fait à : ...................... Le : .......................</span>
    <span style='position: absolute; top: 938px; left: 150px; font-size: 9px; '>Signature :</span>
    <span style='position: absolute; top: 948px; left: 150px; font-size: 8px; '>(Pour les sociétés: nom, qualité du signataire et</span>
    <span style='position: absolute; top: 958px; left: 150px; font-size: 8px; '>cachet)</span>
    <span style='position: absolute; top: 905px; left: 380px; font-weight: bold;'>Le locataire</span>
    <span style='position: absolute; top: 925px; left: 335px; font-size: 8px;'>(Si location longue durée ou en crédit-bail)</span>
    <span style='position: absolute; top: 935px; left: 330px; font-size: 9px;'>Fait à : ...................... Le : .......................</span>
    <span style='position: absolute; top: 945px; left: 330px; font-size: 10px;'>Signature :</span>
    <span style='position: absolute; top: 955px; left: 330px; font-size: 8px;'>(Pour les sociétés: nom, qualité du signataire</span>
    <span style='position: absolute; top: 965px; left: 330px; font-size: 8px;'>et cachet)</span>
    <span style='position: absolute; top: 1000px; left: 50px; font-size: 9px;'>Je m’oppose à la réutilisation de mes données personnelles à des fins de prospection commerciale**:</span>
    <span style='position: absolute; top: 1015px; left: 100px; font-size: 9px;'>Le titulaire <input type='checkbox' ></span>
    <span style='position: absolute; top: 1015px; left: 240px; font-size: 9px;'>Le loueur <input type='checkbox' ></span>
    <span style='position: absolute; top: 1015px; left: 380px; font-size: 9px;'>Le locataire <input type='checkbox' ></span>
    <div style='border: 1px solid #0B368C; width: 75px; left: 509px; position: absolute; padding: 20px; width: 137px; top: 901px; height: 91px; ' ></div>
    <span style='position: absolute; top: 936px; font-size: 10px; left: 512px;  font-size: 8px;' >Vu les pièces justificatives <input type='checkbox' ></span>
    <span style='position: absolute; top: 950px; font-size: 10px; left: 509px; font-size: 8px;' >Rejet de la demande <input type='checkbox' ></span>
    <span style='position: absolute; top: 965px; font-size: 10px; left: 509px; font-size: 8px;' >Motif :</span>
    <span style='position: absolute; top: 975px; font-size: 10px; left: 509px; font-size: 7px;' >Usage (veuillez cocher la case correspondante):</span>
    <span style='position: absolute; top: 985px; font-size: 10px; left: 509px; font-size: 8px;' >Oui <input type='checkbox' ></span>
    <span style='position: absolute; top: 985px; font-size: 10px; left: 589px; font-size: 8px;' >Non <input type='checkbox' ></span>
    <span style='position: absolute; top: 1000px; font-size: 8px; left: 509px; font-size: 8px;' >Mode d’expédition du titre : </span>
    <span style='position: absolute; top: 1000px; font-size: 8px; left: 619px; font-size: 8px;' >Voie postale <input type='checkbox' ></span>
    <span style='position: absolute; top: 1018px; font-size: 8px; left: 553px; font-size: 8px;' >Retrait à l’Imprimerie Nationale <input type='checkbox' ></span>
</div>
";
$html2pdf->writeHTML($html);
$html2pdf->output();
?>