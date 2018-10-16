<?php
require_once 'db.php';
require_once 'validacion.php';

class Autenticador implements Validacion{

private $usuario;
private $clave;

public function __construct($user,$pass){
  $this->usuario = $user;
  $this->clave = $pass;
}

public function auth(){

if($_POST);
echo "prueba auth";

}



public function conect(){
$dbc = new DB();
$db = $dbc->conexion();
$query = $db->prepare("SELECT nombre_usuario,clave,id,admin FROM usuario WHERE nombre_usuario = '$this->usuario'");
$query->execute();
$result = $query->fetchALL(PDO::FETCH_ASSOC);

return $result;
}





public function validar(){
$errores = [];

$user = trim($this->usuario);
if(strlen($user)==0){
  $errores["usuario"] = "Ingresá tu mail o usuario";
}

$password = trim($this->clave);
if (strlen($password==0)) {
  $errores["clave"] = "Ingresá tu contraseña";
}

$baseDatos["clave"] = "";
$baseDatos = $this->conect();
if(count($baseDatos)==0){
  $errores["base"] = "El usuario no está registrado";
}

foreach ($baseDatos as $key => $value) {
  $n_usuario = $value["nombre_usuario"];
  $c_usuario = $value["clave"];
}


if(password_verify($password,$c_usuario)==false){
  $errores["conf_pass"] = "La clave es errónea";
}


return $errores;

}

public function permitir(){

$validacion = $this->validar();


if (count($validacion)==0) {
  $baseDatos["clave"] = "";
  $baseDatos = $this->conect();

  foreach ($baseDatos as $key => $value) {
    $id_usuario = $value["id"];
    $n_usuario = $value["nombre_usuario"];
    $l_usuario = $value["admin"];
    // ver si agrego otros parámetros para iniciar $_SESSION
  }
session_start();
$_SESSION["id_user"] = $id_usuario;
$_SESSION["nombre"] = $n_usuario;
$_SESSION["acceso"] = $l_usuario;



$caducidad =time()+60*60;
setcookie('DEMOTIC_ID',$id_usuario,$caducidad);
setcookie('DEMOTIC_NOMBRE',$n_usuario,$caducidad);
setcookie('DEMOTIC_ACCESO',$l_usuario,$caducidad);


  header("Location:inicio.php");
  return $baseDatos;
}


}

}

 ?>
