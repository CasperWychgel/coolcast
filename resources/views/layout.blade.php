<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/app.css"  media="screen,projection"/>
    <title>Coolcast</title>
</head>

<body>

@yield ('navigation')

@yield ('content')

<script type="text/javascript" src="js/materialize/materialize.min.js"></script>
<script type="text/javascript" src="js/init.js"></script>
</body>
</html>
