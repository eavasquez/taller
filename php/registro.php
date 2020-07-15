<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["fullname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../registro.php';</script>";
			}

			$sql = "SELECT COUNT(*) FROM user";
			$result = mysqli_query($con, $sql);
			$count = mysqli_fetch_assoc($result)['COUNT(*)'];



			if($count <1){
				$dato = md5($_POST[password]);
				$sql = "insert into user(username,fullname,email,password,type_acc,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$dato\",\"administrador\",NOW())";
				$query = $con->query($sql);
			}else{
				$dato = md5($_POST[password]);
				$sql = "insert into user(username,fullname,email,password,type_acc,created_at) value (\"$_POST[username]\",\"$_POST[fullname]\",\"$_POST[email]\",\"$dato\",\"vendedor\",NOW())";
				$query = $con->query($sql);
			}


			 if($query!=null){
				 print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../login.php';</script>";
                
			 }
		}
	}
}



?>