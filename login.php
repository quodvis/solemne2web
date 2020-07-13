<?php
include 'vars.php';
include 'head.php';
include 'navbar.html';
?>
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
<div class="text-center oldbody">
<form class="form-signin" method="post" action="autenticado.php">
    <img class="mb-4" src="/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Por favor autenticarse</h1>
    <label for="inputEmail" class="sr-only">Teléfono</label>
    <input name="telefono" type="tel" id="inputCellphone" class="form-control" placeholder="Teléfono" required autofocus>
    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>

    <button name="submit"class="btn btn-lg btn-primary btn-block" type="submit" value="submit">Autenticarse</button>
  </form>
</div>

<?php
 include 'foot.php'
?>