<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
        .header{
            background-color: rgb(16, 137, 255);
            justify-content: space-between;
            flex-direction: column;
            height: 86vh;
            margin: 0;
            margin-left: auto;
            float: left;
            bottom: 0;
            width: 300px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
            rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
            position: relative;
            top: 0;
            height: 950px;
        }



        .header.sticky{
            position: fixed;
            float: left;
        }



        .header ul{
            list-style: none;
            
        }

        .header ul li{
            padding: 20px;

        }

        .header ul li a{
            text-decoration: none;
        }

        .header h1{
            color: #fff;
            text-align: center;
        }

        .header .navigation{
            position: relative;
            top: 10px;
        }

        .header ul li a button{
            width: 100%;
            background-color: transparent;
            border: none;
            color: #fff;
            transition: all 0.35s ease-in-out;
            padding: 20px;
            cursor: pointer;
            position: relative;
            top: 20px;
            text-align: center;
            font-size: 20px;
        }

        .header ul li a button:hover{
            background-color: aliceblue;
            border-radius: 30px;
            color: black;
        }
</style>
        <header class="header">
            <div class="navigation">
                <h1>Website Logo</h1>
                <nav>
                    <ul>
                        <li><a href="http://localhost/sivV2/public"> <button>Acceuil</button> </a></li>
                        <li><a href="http://localhost/sivV2/connexion/confirmer/DeclarationAchat/personne/"> <button>Personne</button> </a></li>
                        <li><a href=""><button>Véhicule</button> </a></li>
                        <li><a href=""><button>Opération</button> </a></li>
                        <li><a href=""><button>Générer les pdf</button> </a></li>
                    </ul>
                </nav>
            </div>
        </header>
</body>
</html>