
  <!-- Footer -->
  <footer>

    <style>
        .forfait h1{
            font-weight: 500;
            font-size: 28px;
            text-align: center;
            letter-spacing: -0.5px;
            margin-bottom: 0px;
            color: rgb(15, 33, 55);
        }
        .forfait .proposition{
            position: relative;
            top: 30px;
            left: 770px;
            background-color: rgb(16, 137, 255);
            border-radius: 10px;
            width: 400px;
            height: 500px;
        }
        .forfait .proposition .payement{
            position: absolute;
            top: 40px;
            left: 230px;
            color: #fff;
            font-size: 20px;
        }
        .forfait .proposition .Pro{
            position: absolute;
            top: 30px;
            left: 20px;
            color: #fff;
            font-size: 30px;
        }
        .contenu .forfait .proposition .panier{
            display: inline-flex;
            -moz-box-pack: center;
            justify-content: center;
            -moz-box-align: center;
            align-items: center;
            border-radius: 30px;
            font-weight: bold;
            font-size: 16px;
            text-align: center;
            line-height: 1;
            color: rgb(255, 255, 255);
            padding: 21px 29px;
            background-color: aliceblue;
            transition: all 500ms ease 0s;
            cursor: pointer;
            position: absolute;
            color: rgb(16, 137, 255);
            top: 400px;
            left: 90px;
        }
        .contenu .forfait .proposition .panier:hover{
            color: #fff;
            background-color: black;

        }
        footer{
            flex-shrink: 0;
            width: 100%;
            background: rgb(16, 137, 255);
            color: #fff;
            position: relative;
            top: 100px;
        }
        .contenu-footer{
            width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            font-size: 20px;
            padding: 50px 0 100px;
        }
        .bloc{
            width: 25%;
            margin: 0 30px;
        }
        .footer-contact p{
            padding: 5px 0;
        }
        .listes-services{
            list-style: none;
        }
        .listes-services li{
            padding: 2px 0;
        }
        .listes-services a{
            text-decoration: none;
            color: #fff;
        }
        .listes-services{
            position: relative;
            right: 40px;
        }
        .listes-services li{
            padding: 10px;
            text-align: left;
            position: relative;
            left: -10px;
        }
    </style>
       <div class="contenu-footer">
            <div class="bloc footer-services">
                 <h3>Nos services</h3>
                 <ul class="listes-services">
                    <li><a href="">Annonce </a></li>
                    <li><a href="">Gestion pdf </a></li>
                    <li><a href="">Affichette </a></li>
                 </ul>
            </div>

            <div class="bloc footer-contact">
                <h3>Restons en contact</h3>
                <p>55-55-55-55-55</p>
                <p>support@contact.com</p>
           </div>
           <div class="bloc footer-reseaux">
                <h3>Nos réseaux</h3>
                <ul class="listes-services">
                <li><a href=""><img src="http://localhost/sivV2/private/src/fb.png" style="width: 30px; position: relative; top: 5px;"> Facebook </a></li>
                <li><a href=""><img src="http://localhost/sivV2/private/src/insta.png" style="width: 30px; position: relative; top: 5px;"> Instagram </a></li>
                <li><a href=""><img src="http://localhost/sivV2/private/src/tw.png" style="width: 30px; position: relative; top: 5px;"> Tweeter </a></li>
                </ul>
            </div>
       </div>
       </div>
       <div class="copyright" style="text-align: center; font-size: 20px; position: relative; top: -20px; left: -20px;">
            <p>© Copyright 2022 sinara</p>
        </div>
    </footer>