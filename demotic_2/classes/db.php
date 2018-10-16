<?php
class DB {
private $dbConnect;
public function __construct(){
  $dsn = 'mysql:host=localhost;dbname=demotic;charset=utf8mb4;port:3306';
  $db_user='root';
  $db_pass='';

  try{
          $this->dbConnect =new PDO($dsn,$db_user,$db_pass);
          }
          catch(PDOException $Exception){
            echo $Exception->getMessage();
          }
        }


     public function conexion(){
       return $this->dbConnect;
     }

     // public function cargarPefil(){
     //
     //  $b = $this->conexion();
     //  $query = $b->prepare("INSERT into usuario VALUES(DEFAULT,:nombre,:apellido,:usuario,:mail,:celular,:dni,:calle,:numero,:piso,:dpto,:ciudad,:provincia,:pais,0,:clave)");
     //  //
     //  $query->bindValue(':nombre',$this->nombre,PDO::PARAM_STR);
     //  $query->bindValue(':apellido',$this->apellido,PDO::PARAM_STR);
     //  $query->bindValue(':usuario',$this->usuario,PDO::PARAM_STR);
     //  $query->bindValue(':mail',$this->mail,PDO::PARAM_STR);
     //  $query->bindValue(':celular',$this->celular,PDO::PARAM_INT);
     //  $query->bindValue(':dni',$this->doc,PDO::PARAM_INT);
     //  $query->bindValue(':calle',$this->calle,PDO::PARAM_STR);
     //  $query->bindValue(':numero',$this->numero,PDO::PARAM_INT);
     //  $query->bindValue(':piso',$this->piso,PDO::PARAM_INT);
     //  $query->bindValue(':dpto',$this->dpto,PDO::PARAM_STR);
     //  $query->bindValue(':ciudad',$this->ciudad,PDO::PARAM_STR);
     //  $query->bindValue(':provincia',$this->provincia,PDO::PARAM_STR);
     //  $query->bindValue(':pais',$this->pais,PDO::PARAM_STR);
     //  $query->bindValue(':clave',$this->password,PDO::PARAM_STR);
     //  $query->execute();
     //  // return $query;
     //
     //
     //  header("Location:succes.php");
     //
     //
     //
     //
     //
     // }

}

// $a = new DB();
// $b = $a->conexion();
// var_dump($b);

 ?>
