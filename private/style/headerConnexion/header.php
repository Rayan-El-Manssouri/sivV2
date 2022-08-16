<style>
    /* Header */
    .header{
        position: fixed;
        top: -20px;
        left: 200px;
        width: 100%;
        transition: all 0.35s ease-in-out 0s;
        padding: 30px 0px;
        height: 80px;
        z-index: 1000000;
    }

    .header .navigation.text{
        position: relative;
        top: 50px;
    }

    .header .navigation.text li a{
        color: black;
    }


    .header .navigation .hover.active li{
        color: rgb(16, 137, 255);
    }

    .header .navigation{
        display: flex;
        list-style: none;   
        width: 100%;
        position: relative;
        left: 360px;
        top: 40px;
    }

    .header .navigation li a{
        text-decoration: none;
    }

    .header .navigation li a{
        text-align: right;
        padding: 20px;
        color: aliceblue;
        position: relative;
        left: 100px;
    }

    .header .navigation span{
        color: aliceblue;
        font-size: 20px;
    }


    .header.sticky{
        background-color: #fff;
        position: fixed;
        padding: 5px 10px;
        height: 90px;
    }
</style>


<div class="contenu">
    <section class="background">
        <header class="header">
            <div>
                <nav class="navigation">
                        <span class="logo">Website logo</span>
                    <li class="hover"><a href="http://localhost/sivV2/public/">Home</a></li>
                    <li><a href="#">Signaler</a></li>
                    <li><a href="#">Nous contacter</a></li>
                    <li><a href="#">Partenaire</a></li>
                </nav>
            </div>
        </header>
    </section>
</div>