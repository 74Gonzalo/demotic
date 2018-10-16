<?php
session_start();
session_destroy();
// Acá va lo que sea para eliminar las cookies
$caducidad = -1;
setcookie('DEMOTIC_ID',$id_usuario,$caducidad);
setcookie('DEMOTIC_NOMBRE',$n_usuario,$caducidad);
setcookie('DEMOTIC_ACCESO',$l_usuario,$caducidad);
setcookie('PHPSSID',0,$caducidad);


header("Location:index.php");

 ?>
