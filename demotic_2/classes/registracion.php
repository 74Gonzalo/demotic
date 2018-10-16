<?php
require_once 'validacion.php';
require_once 'db.php';
class Registracion implements Validacion{

private $nombre;
private $apellido;
private $usuario;
private $password;
private $conf_password;
private $mail;
private $celular;
private $doc;
private $calle;
private $numero;
private $ciudad;
private $provincia;
private $pais;
private $piso;
private $dpto;

public function __construct($name,$lastName,$user_name,$clave,$conf_clave,$email,$cel_phone,$n_doc,$dir,$nro,$city,$prov,$country,$piso,$dpto){


  $this->nombre = $name;
  $this->apellido = $lastName;
  $this->usuario = $user_name;
  $this->password = $clave;
  $this->conf_password = $conf_clave;
  $this->mail = $email;
  $this->celular = $cel_phone;
  $this->doc = $n_doc;
  $this->calle = $dir;
  $this->numero = $nro;
  $this->ciudad = $city;
  $this->provincia = $prov;
  $this->pais = $country;
  $this->piso = $piso;
  $this->dpto = $dpto;
}

public function validar(){
$errores = [];

$names = trim($this->nombre);
if (strlen($names)<2){
$errores["nombre"] = "Ingresá un nombre válido";
}

$lastNames = trim($this->apellido);
if (strlen($lastNames)<2){
$errores["apellido"] = "Por favor ingresá tu apellido";
}

$user = trim($this->usuario);
if (strlen($user)<8){
  $errores["user_name_1"] = "El nombre de usuario debe ser de al menos 8 caracteres";
}
//Agregar que no se repitan los usuarios, voy a tener que usar base de datos

$contra = trim($this->password);
if(strlen($contra)<8){
  $errores["pass"] = "La contraseña debe tener por lo menos 8 caracteres";
}

$conf_contra = trim($this->conf_password);
if($contra != $conf_contra||strlen($conf_contra)<8){
  $errores["conf_clave"] = "Volvé a confirmar la contraseña";
}

$userMail = (trim($this->mail));
    if(!filter_var($userMail,FILTER_VALIDATE_EMAIL)&&strlen($userMail<6)){
      $errores['mail'] = "Ingresá un mail válido";
    }

$celu = trim($this->celular);
if(strlen($celu)<6){
  $errores["celular"] = "Ingresá un celular válido";
}

$dni = trim($this->doc);
if(strlen($dni)<7){
  $errores["documento"] = "Ingresá un documento válido";
}

$calle = trim($this->calle);
if(strlen($calle)==0){
  $errores["calle"] = "Ingresá calle";
}

$num = trim($this->numero);
if (strlen($num)==0) {
  $errores["nro"] = "Ingresá el nro de tu domicilio";
}

$loc = trim($this->ciudad);
if(strlen($loc)==0){
  $errores["ciudad"] = "Ingresá una ciudad";
}

$pro = trim($this->provincia);
if(strlen($pro)==0){
  $errores["provincia"] = "Ingresá una provincia";
}

$ispa = trim($this->pais);
if(strlen($ispa)==0){
  $errores["pais"] = "Ingresá un país";
}

return $errores;
}

private function hash(){
  $pass = password_hash($this->password,PASSWORD_DEFAULT);
  return $pass;
}




public function permitir(){

$cant_errores = count($this->validar());
if($cant_errores==0){
  $a = new DB();
  $b = $a->conexion();


  $query = $b->prepare("INSERT into usuario VALUES(DEFAULT,:nombre,:apellido,:usuario,:mail,:celular,:dni,:calle,:numero,:piso,:dpto,:ciudad,:provincia,:pais,0,:clave)");
  //
  $query->bindValue(':nombre',$this->nombre,PDO::PARAM_STR);
  $query->bindValue(':apellido',$this->apellido,PDO::PARAM_STR);
  $query->bindValue(':usuario',$this->usuario,PDO::PARAM_STR);
  $query->bindValue(':mail',$this->mail,PDO::PARAM_STR);
  $query->bindValue(':celular',$this->celular,PDO::PARAM_INT);
  $query->bindValue(':dni',$this->doc,PDO::PARAM_INT);
  $query->bindValue(':calle',$this->calle,PDO::PARAM_STR);
  $query->bindValue(':numero',$this->numero,PDO::PARAM_INT);
  $query->bindValue(':piso',$this->piso,PDO::PARAM_INT);
  $query->bindValue(':dpto',$this->dpto,PDO::PARAM_STR);
  $query->bindValue(':ciudad',$this->ciudad,PDO::PARAM_STR);
  $query->bindValue(':provincia',$this->provincia,PDO::PARAM_STR);
  $query->bindValue(':pais',$this->pais,PDO::PARAM_STR);
  $query->bindValue(':clave',$this->hash(),PDO::PARAM_STR);
  $query->execute();
  // return $query;


  header("Location:succes.php");
}



}

}


$a = new Registracion($name,$lastName,$user_name,$clave,$conf_clave,$email,$cel_phone,$n_doc,$dir,$nro,$city,$prov,$country,$piso,$dpto);


$b = $a->validar();
$c = $a->permitir();
// $d = $a->hash();
// var_dump($b);
echo "<br>";
// var_dump($d);

 ?>
