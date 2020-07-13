<?php
include 'vars.php';
include 'head.php';
include 'navbar.html';
?>


<link href="signin.css" rel="stylesheet">
<div class="text-center oldbody">
  <form action="insertProducto.php" method="post" class="form-signin">
    
    <h1 class="h3 mb-3 font-weight-normal">Ingreso de productos</h1>
    <label for="inputNombreProducto" class="sr-only">Nombre</label>
    <input type="text" min="2" name="nombreProducto" id="inputnombreProducto" class="form-control" placeholder="Nombre Producto" required autofocus>
    <label for="inputPrecio" class="sr-only">Precio</label>
    <input type="number" name="precio" min="1" step="any" id="inputPrecio"  class="form-control" placeholder="Precio" required>
    <label for="inputPassword" class="sr-only">Cantidad</label>
    <input type="number" name="cantidad" min="1" id="inputCantidad" class="form-control" placeholder="Cantidad" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit">Agregar</button>
</form>

</div>

<!--<h2>Ingreso productos</h2>
<form action="#" method="post">
Nombre:   <input type="text" name="nombre"><br>
Precio:   <input type="text" name="precio"><br>
Cantidad: <input type="text" name="cantidad"><br>
<input type="submit">
</form>-->


<?php
include 'foot.php';
?>