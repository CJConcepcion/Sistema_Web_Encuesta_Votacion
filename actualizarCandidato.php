<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("conexion.php");
	$sentencia="update candidatos set cod_candidato = '$cod_candidato', nombre='$nombre', cedula = '$cedula', puesto='$puesto', postulacion='$postulacion' where id='$id'";
	//la variable  $mysqli viene de conexion que lo traigo con el require("conexion.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamiento, no se han actualizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: tablaVotacion.php");
		
		echo "<script>location.href='tablaVotacion.php'</script>";
	}else {
		echo '<script>alert("Usuario actualizado con exito")</script> ';

		echo "<script>location.href='tablaVotacion.php'</script>";
			
	}
?>