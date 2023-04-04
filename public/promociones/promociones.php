<?php
    // include("../../controller/connection.php");
    // $productos = ("SELECT * FROM productos");

    include("../../controller/connection.php");
    if ($_POST) {
        # code...
        $post = strtoupper($_POST);
        
        // print_r($_POST);
        
        //recolectamos los adtos del metodo post
        $nombredelproductos=(isset($_POST["nombredelproducto"])?$_POST["nombredelproducto"]:"");
        $precio=(isset($_POST["precio"])?$_POST["precio"]:"");
  $imagen=(isset($_POST["imagen"])?$_POST["imagen"]:"");
        // $imagen = (isset($_FILES['imagen']['name']))
  $descripcion=(isset($_POST["descripcion"])?$_POST["descripcion"]:"");
  //preparar la insersion de los datos
  $sentencia = $conexion->prepare("INSERT INTO productos(id,nombre_del_producto,precio_del_producto,imagen_del_producto,descripcion) VALUES (null, :nombredelproducto, :precio , :imagen, :descripcion)");
  //Asignando los valores que vienen del formulario
  $sentencia->bindParam(":nombredelproducto",$nombredelproductos);
  $sentencia->bindParam(":precio",$precio);
  $sentencia->bindParam(":imagen",$imagen);
  $sentencia->bindParam(":descripcion",$descripcion);
  $sentencia->execute();
  if ($sentencia) {
      
      echo"<div class='alert alert-success' role='alert'>";
      echo "<strong>Registro</strong> Agregado exitosamente!";
      echo "</div>";       
    }
}

require ("../../view/templates/header.php");
?>


<form action="" method="post" enctype="multipart/form-data">


<div class="mb-3">
  <label for="nombredelproducto" class="form-label">Nombre del Producto</label>
  <input type="text"
    class="form-control" name="nombredelproducto" id="nombredelproducto" aria-describedby="helpId" placeholder="Ingresa el Nombre del Procuto">
</div>
<div class="mb-3">
  <label for="precio" class="form-label">Precio del Producto</label>
  <input type="number" min="0"
    class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Ingresa el precio del producto">
</div>
<div class="mb-3">
  <label for="imagen" class="form-label">Ingresa una imagen para este producto</label>
  <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Seleccionar Imagen" aria-describedby="Seleccionar Imagen">
  <div id="fileHelpId" class="form-text">De preferencia que todas las imagenes tengan la misma resolución</div>
</div>
<div class="mb-3">
  <label for="descripcion" class="form-label">Descripcion</label>
  <input type="text"
    class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="Ingresa una descripcion breve del producto">
  <small id="helpId" class="form-text text-muted">no mayor a 200 caracteres</small>
</div>

<a type="submit" class="btn btn-success">Agregar prodducto</a>

</form>

<?php
require ("../../view/templates/footer.php");
?>