<?php
session_start();
?>
<html>
	<head>
		<title>Php y Mysql</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
			<h2>Formulario de Registro de Usuario y Login de Usuario</h2>
			<br>
            <br>
			<p>Instrucciones:</p>
			<ol>
				<li>Registrate en la opcion de registro.</li>
				<li>Inicie sesion en la opcion de login.</li>
				<li>Para finalizar la sesion, click en la opcion salir .</li>
			</ol>
			<br>
        	<p>Para tener en cuenta:</p>
			<ol>
				<li>El sistema rechaza el registro cuando se repite el nombre de usuario.</li>
				<li>El sistema rechaza el registro cuando se repite el correo electrónico.</li>
                <li>El sistema rechaza el registro cuando se repite el correo electrónico.</li>
				<li>Para encriptar el password se utiliza el algoritmo MD5.</li>
                <li>El sistema utiliza el método POST para el envío del registro y login de sesión.</li>
			</ol>
			<!--Esto es un comentario-->

	</div>
	</div>
	</div>
	</body>
</html>