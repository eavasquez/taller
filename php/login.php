<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$user_id=null;
			$permiso = null;
            $dato = md5($_POST[password]);
			$sql1= "select * from user where (username=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$dato\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				$permiso=$r["type_acc"];
				break;
			}
			if($user_id==null)
				{
					print "<script>alert(\"Acceso invalido.\");window.location='../login.php';</script>";
				}
			else if($permiso=="administrador"){
				session_start();
				$_SESSION["user_id"]=$user_id;
				//AQUI SE TIENE QUE IR AL MENU ADMINISTRADOR
				//print "<script>window.location='../home.php';</script>";

				}
			else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../home.php';</script>";
			}			
			}
		}
	}
}



?>