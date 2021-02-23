<?php 
	// function conexion_mysql(){
	// 	$db_host="localhost"; 
	// 	$db_user="admin";
	// 	$db_password="2dm1n123*";
	// 	$db_name="noticiasappdb";
	// 	$conexion= mysql_connect($db_host,$db_user,$db_password) or die("error del servidor<br>".mysql_error());
	// 	mysql_select_db($db_name,$conexion) or die("error en la bd<br>".mysql_error());
	// 	return $conexion;
	// }

	function conexion_mysql(){
		$db_host="localhost"; 
		$db_user="admin";
		$db_password="*$1r&0Wdb@2oL%*";
		$db_name="cread_calidad5db";
		$conexion= mysql_connect($db_host,$db_user,$db_password) or die("error del servidor<br>".mysql_error());
		mysql_select_db($db_name,$conexion) or die("error en la bd<br>".mysql_error());
		return $conexion;
	}

?>