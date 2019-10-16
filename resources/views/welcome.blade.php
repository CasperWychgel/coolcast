<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/app.css"  media="screen,projection"/>

        <title>Coolcast</title>

        <!-- Styles -->
    </head>
    <body>
    <section id="navigation">
        <nav>
            <div class="nav-wrapper coolcastblue">
                <a href="index.php" class="brand-logo white-text center"><span>CoolCast</span></a>
                <a data-target="slide-out" style="display: block" class="sidenav-trigger"><i style="color: black" class="material-icons ">menu</i></a>
            </div>
        </nav>

        <ul id="slide-out" class="sidenav" style="transform: translateX(-105%);">
            <li><div class="user-view">
                    <div class="background coolcastblue"></div>
                    <a><img class="circle" src="img/logo/Fridge.svg"></a>
                    <a><span class="white-text name">CoolCast</span></a>
                    <a href=""><span class="white-text email">info@coolcast.nl</span></a>
                </div></li>
            <li><a class="subheader">Your locations</a></li>
            <li><a href="">Keuken</a></li>
            <li><a href="">Voorraadkast</a></li>
            <li><a href="">Bijkeuken</a></li>


        </ul>
    </section>
    <div class="container">
        <section id="foodcollection">
            <ul class="">
                <li class="coolcastlist">Testing</li>
                <li class="coolcastlist">Testing</li>
                <li class="coolcastlist">Testing</li>
                <li class="coolcastlist">Testing</li>
            </ul>
        </section>
    </div>
    <div class="container">
        <div class="center-align center">
            <a class="btn-floating btn-small waves-effect waves-blue coolcastblue"><i class="material-icons">check</i></a>
            <a class="btn-floating btn-large waves-effect waves-light coolcastdarkblue"><i class="material-icons">add</i></a>
            <a class="btn-floating btn-small waves-effect waves-blue coolcastblue"><i class="material-icons">close</i></a>
        </div>
    </div>



    <script type="text/javascript" src="js/materialize/materialize.min.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    </body>
</html>
