<?php
require_once 'partials/header1.php';
if($acceso<1){
header("Location:no_access.php");
} ?>
<!-- <a id="boton" class="btn btn-default"href="#">Tutorial</a> -->
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  <br>
  <!--Hacer el tutorial ocultable de como ingresar los productos  -->
  <button class="btn btn-default" id="boton"type="button" name="button">Tutorial</button>
    <div  id="tutorial" class="tutorial">
      <ul>
        <li>Paso 1</li>
        <li>Paso 2</li>
        <li>Paso 3</li>
      </ul>
    </div>
  </div>


<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
    <!-- espacio vacío -->
  </div>

  <div class="col-xs-12 col-sm-12 col-md-10 col-xs-10">

    <h1 class="text-center">Cargá los productos</h1>

  <form class="form-horizontal" role="form" action="index.html" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input id="nombre_prod" class="form-control" type="text" name="nombre_prod" value="" placeholder="Nombre del producto">
    </div>
    <div class="form-group">
      <input id="categoria" class="form-control" type="text" name="categoria" value="" placeholder="Categoría del producto">
    </div>
    <div class="form-group">
      <input id="subcategoria" class="form-control" type="text" name="subcategoria" value="" placeholder="Subcategoría del producto">
    </div>
    <div  class="form-group">
      <select id="genero" class="form-control" name="genero">
        <option value="--">Selecciona</option>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
        <option value="boy">Niños</option>
        <option value="girl">Niñas</option>
      </select>
    </div>
    <div class="form-group">
      <input id="valor" class="form-control" type="text" name="valor" value="" placeholder="Valor del producto">
    </div>
    <div class="form-group">
      <textarea id="descripcion" class="form-control" name="descripcion" rows="8" cols="80" placeholder="Descripción del producto"></textarea>
    </div>
    <div class="form-group">
      <input id="stock" class="form-control" type="text" name="stock" value="" placeholder="Stock">
    </div>
    <div class="form-group">
      <input id="foto" class="form-control" type="file" name="foto" value="">
    </div>
    <div class="text-center">
      <button class="btn btn-primary"type="submit" name="button">Enviar</button>
    </div>
    <br>
  </form>
  Acá cargamos los productos


</div>


  <div class="hidden-xs hidden-sm col-md-1 col-lg-1">
    <!-- espacio vacío -->
  </div>
</div>


<?php require_once 'partials/footer.php'; ?>
