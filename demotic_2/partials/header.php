<?php
session_start();

if(isset($_COOKIE["DEMOTIC_ID"])){
  header("Location:inicio.php");
}
if($_SESSION){
  header("Location:inicio.php");
}


if($_POST){
  var_dump($_POST);
  $user = $_POST["user"];
  $pass = $_POST["password"];
  require_once 'classes/autenticador.php';

  $a = new Autenticador($user,$pass);
  $b = $a->validar();
  var_dump($b);
  $z = $a->permitir();
  echo $z;
  $c = $a->conect();
  var_dump($c);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>Demotic</title>
    <link  href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Saira+Extra+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>

  <body>
<section class="container-fluid">
<header class="row" id="header">
<div class="hidden-xs hidden-sm col-md-7 col-lg-7">
  <h1 id="ah4"> <a id="titulo" href="index.php">  <img class="img-responsive"src="images/logodemotic.jpg" alt="logo">    </a></h1>
</div>

<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
  <nav id="nav" class="navbar navbar-default"><br>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a id="ah5"class="navbar-brand" href="index.php"> <img class="images-responsive"src="images/logodemotic.jpg" alt="logo" width="60px"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="nosotros.php" class="btn btn-default" id="button">Nosotros</a></li>
        <li><a href="registro.php" class="btn btn-default" id="button">Registrate</a></li>
        <li><a href="contacto.php" class="btn btn-default" id="button">Contacto</a></li>
        <li><a href="noticias.php" class="btn btn-default" id="button">Noticias</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="text-right">
  <form class="" action="index.php" method="post">
  <input type="text" name="user" value="" placeholder="Usuario o mail">
  <input type="password" name="password" value="" placeholder="Contraseña">
  <button class="btn btn-default" type="submit" name="auth">Enviar</button>
</div>
</form>

</div>

</header>
