<?php
	
	SESSION_START();
	// Conectamos con la base de datos
	require('./../conexion.php');   
	$titulo =$_POST['titulo'];

	$fecha = date('Y-m-d');

    $codigoEncuesta = 0;

	$consulta = "SELECT MAX(codigoEncuesta) AS code FROM encuestas";

	$producto =  mysqli_query($mysqli, $consulta);

	if ($producto) {
	
		$maxCodeArray = mysqli_fetch_assoc($producto);

		$codigo =  $maxCodeArray['code'];
		if ($codigo) {
			$codigoEncuesta = $codigo + 1;	
		}else{
			$codigoEncuesta = 1;
		}

		//insert
		// Insertamos la nueva encuesta
		$sql = "INSERT INTO encuestas (codigoEncuesta, titulo, fecha) VALUES ('$codigoEncuesta', '$titulo', '$fecha') ";
		$resultado = mysqli_query($mysqli, $sql);

		//Tomamos el id de la encuestas por su codigo
		$sql = "SELECT * FROM encuestas WHERE codigoEncuesta = " . $codigoEncuesta;
		$resultado = mysqli_query($mysqli, $sql);
		if ($resultado){
			$productoArray = mysqli_fetch_assoc($resultado);	
			$id = $productoArray['id_encuesta'];
			// echo $id;
			// Agregar el id de la encuesta creada en la variable global.
			$_SESSION['id_encuesta'] = $id;
		}
		else {
			echo 'Error de Consulta!'; 
		}	

	}
	else {
		echo 'Error de Consulta.';
	}

?>

<?php
	echo '<script language="javascript">alert("Titulo insertado correctamente"); window.location.href="crear-preguntas.php";</script>';
?>
