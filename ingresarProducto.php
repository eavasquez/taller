<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title> Bienvenido </title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>Ingresar un articulo</h2>
    <br>

		<form role="form" name="ingresarProducto" action="php/ingresarProducto.php" method="post">
		  <div class="form-group">
		    <label for="producto">Nombre del Producto</label>
		    <input type="text" class="form-control" id="producto" name="producto" placeholder="Nombre del producto">
		  </div>
		  <div class="form-group">
		    <label for="marca">Marca</label>
		    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca">
		  </div>
		  <div class="form-group">
		    <label for="cantidad">Cantidad</label>
		    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad">
		  </div>
		  <div class="form-group">
		    <label for="precio">Precio</label>
		    <input type="number" class="form-control" id="precio" name="precio" placeholder="Precio">
		  </div>
		  <div class="form-group">
		    <label for="comentario">Comentario</label>
		    <input type="text" class="form-control" id="comentario" name="comentario" placeholder="Comentario">
		  </div>	
          <br>

		    <button type="submit" class="btn btn-default">Ingresar</button>
		    <button type="reset" class="btn btn-default">Limpiar</button>
		    <a href="home.php">
		      <button type="button" class="btn btn-default">Volver</button>
            </a>
		</form>
</div>
</div>
</div>
<script src="js/valida_ingresarProducto.js"></script>
	</body>
</html>