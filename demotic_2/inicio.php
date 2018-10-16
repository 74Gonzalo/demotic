<?php
require_once 'partials/header1.php';

var_dump($_SESSION);


 ?>
 <h1 class="text-left">Hola, <?php echo $nombre; ?></h1>

<?php if($acceso>0){
  echo "<a class='btn btn-default' href='ingreso_productos.php'>Ingresar productos</a>";
} ?>


<?php require_once 'partials/footer.php'; ?>
