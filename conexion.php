<?php
include ("conexion1.php");
	$_host = "localhost";
	$_user = "root";
	$_pass = "";
	$_BD = "pasteleria";

//Crear la conexion
	$_con = mysqli_connect($_host, $_user, $_pass, $_BD);

	if(!$_con){
		die("Error de Conexion".mysqli_connect_error());
	}else{
		echo "Conexion perdida";
	}

	mysqli_set_charset($_con, "utf8");
?>