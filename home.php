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
	<?php include "php/navbar.php";
	?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Bienvenido </h2><br><br>

		<a href="ingresarProducto.php">
	    	<button type="submit" class="btn btn-default">Ingresar un Producto</button><br><br>
		</a>
		<button type="submit" class="btn btn-default">Vender un producto</button><br><br>
		<button type="submit" class="btn btn-default">Consultar Stock de Inventario</button><br><br>
		<button type="submit" class="btn btn-default">Generar informe de ingreso de productos</button><br><br>
		<button type="submit" class="btn btn-default">Generar informe de egreso de productos</button><br><br>



</div>
</div>
</div>
	</body>
</html>