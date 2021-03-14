<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion.php");
	$sentencia="update sesion set nombre='$nombre', cedula_usuario = '$cedula_usuario', password='$password', correo='$correo', passadmin='$passadmin' where id='$id'";
	//la variable  $mysqli viene de conexion que lo traigo con el require("conexion.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamiento, no se han actualizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: agregarUsuarios.php");
		
		echo "<script>location.href='agregarUsuarios.php'</script>";
	}else {
		echo '<script>alert("Registro actualizado con exito...")</script> ';
		
		echo "<script>location.href='agregarUsuarios.php'</script>";

		
	}
?>