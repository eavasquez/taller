<?php

if(!empty($_POST)){
	if(isset($_POST["producto"]) &&isset($_POST["marca"]) &&isset($_POST["cantidad"]) &&isset($_POST["precio"]) &&isset($_POST["comentario"])){
		if($_POST["producto"]!=""&& $_POST["marca"]!=""&&$_POST["cantidad"]!=""&&$_POST["precio"]!=""&&$_POST["comentario"]){
			include "conexion.php";
			
			$sql = "insert into productos(producto,marca,cantidad,precio,comentario,fecha_registro) value (\"$_POST[producto]\",\"$_POST[marca]\",\"$_POST[cantidad]\",\"$_POST[precio]\",\"$_POST[comentario]\", NOW())";
           	$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Producto Ingresado correctamente\");window.location='../ingresarProducto.php';</script>";
                
			}
		}
	}
}



?>