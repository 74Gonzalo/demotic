<?php
require_once 'partials/header2.php';
$name = "";
$lastName = "";
$user_name = "";
$clave = "";
$conf_clave = "";
$email = "";
$cel_phone = "";
$n_doc = "";
$dir = "";
$nro = "";
$city = "";
$prov = "";
$country = "";
$piso = "";
$dpto = "";


if ($_POST) {
 // var_dump($_POST);
 $name = $_POST["nombre"];
 $lastName = $_POST["apellido"];
 $user_name = $_POST["nombre_usuario"];
 $clave = $_POST["pass"];
 $conf_clave = $_POST["conf_pass"];
 $email = $_POST["mail"];
 $cel_phone = $_POST["celular"];
 $n_doc = $_POST["dni"];
 $dir = $_POST["calle"];
 $nro = $_POST["numero"];
 $city = $_POST["ciudad"];
 $prov = $_POST["provincia"];
 $country = $_POST["pais"];
 $piso = $_POST["pais"];
 $dpto = $_POST["dpto"];
 $info = $_POST;
 require_once 'classes/registracion.php';
}
 ?>
<div class="row">
<h2 class="text-center">Registrate!</h2>


<div class="hidden-xs hidden-sm col-md-4 col-lg-4">


  <!-- Costados del formulario, ver lo rellenamos con algo  -->
</div>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  <div class="text-center">
  <?php
  if($_POST){
  $a = new Registracion($name,$lastName,$user_name,$clave,$conf_clave,$email,$cel_phone,$n_doc,$dir,$nro,$city,$prov,$country,$piso,$dpto);
  $b = $a->validar();
   if(count($b)>0){ ?>
    <ul class="text-center">
      <?php foreach ($b as $error) {?>
      <li><?=$error?></li>
    <?php }?>
  </ul>
  <?php } }?>
  </div>
<form class="form-horizontal" role="formulario" action="registro.php" method="post">
  <div class="form-groupp">
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <input id="nombre" class="form-control"type="text" name="nombre" value="<?php echo $name; ?>" placeholder="Nombre">
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <input id="apellido" class="form-control" type="text" name="apellido" value="<?php echo $lastName;?>" placeholder="Apellido">
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <input id="nombre_usuario" class="form-control"type="text" name="nombre_usuario" value="<?php echo $user_name; ?>" placeholder="Nombre de Usuario">
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <input id="pass" class="form-control" type="password" name="pass" value="" placeholder="Contraseña">
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <input id="conf_pass" class="form-control" type="password" name="conf_pass" value="" placeholder="Confirmación de contraseña">
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <input id="mail" class="form-control" type="text" name="mail" value="<?php echo $email; ?>" placeholder="e-mail">
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <input id="celu" class="form-control" type="text" name="celular" value="<?php echo $cel_phone; ?>" placeholder="celular">
   </div>
   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <input id="dni" class="form-control" type="text" name="dni" value="<?php echo $n_doc; ?>" placeholder="DNI">
   </div>

   <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">

     <input id="calle" class="form-control" type="text" name="calle" value="<?php echo $dir; ?>" placeholder="Calle">
   </div>
   <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
     <input id="numero" class="form-control" type="text" name="numero" value="<?php echo $nro; ?>" placeholder="Número">
   </div>
   <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
     <input id="piso" class="form-control" type="number" name="piso" value="<?php echo $piso;?>" placeholder="Piso">
   </div>
   <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
     <input id="dpto" class="form-control" type="text" name="dpto" value="<?php echo $dpto;?>" placeholder="Dpto">
   </div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
     <input id="ciudad" class="form-control" type="text" name="ciudad" value="<?php echo $city; ?>" placeholder="Ciudad">
   </div>
   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
     <input id="provincia" class="form-control" type="text" name="provincia" value="<?php echo $prov; ?>" placeholder="Provincia">
   </div>
   <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
     <input id="pais" class="form-control" type="text" name="pais" value="<?php echo  $country; ?>" placeholder="País">
   </div>
   <br>
 </div>

   <input type="hidden" name="admin" value="0">
<div class="text-center">
  <button class="btn btn-default" type="submit" name="Enviar">Enviar</button>
</div>
</form>




</div>

<div class="hidden-xs hidden-sm col-md-4 col-lg-4">
  <!-- Costados del formulario, ver lo rellenamos con algo  -->
</div>






</div>
<?php
require_once 'partials/footer.php';
 ?>
