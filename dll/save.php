<?php
	include("conf.php");
	$conexion = conexion_mysql();

	$ar_tema=$_POST['ar_tema'];
	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	$institucion=$_POST['institucion'];
	$dir_pos=$_POST['dir_pos'];
	$email=$_POST['email'];
	$resumen=$_POST['resumen'];
	$curriculum=$_POST['curriculum'];
	
	$query = "INSERT INTO wp_comunicaciones VALUES(NULL,'$ar_tema','$titulo','$autor','$institucion','$dir_pos','$email','$resumen','$curriculum');";
	if(mysql_query($query)){
		echo "<script>
				alert('Sus datos se han guardado con éxito');
				location.href='http://www.caled-ead.org/calidad5/'
			</script>";
	}else{
		echo "<script>
			alert('Ha ocurrido un error al guardar los datos, por favor intentelo nuevamente')
			javascript:window.history.back();
		</script>";
		
	}
	// Cerrar la conexión
	mysql_close($conexion);

 ?>