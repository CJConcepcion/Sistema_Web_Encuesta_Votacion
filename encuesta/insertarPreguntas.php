<?php
	
	SESSION_START();
	// Conectamos con la base de datos
	require('./../conexion.php');   


	// id de la encuesta
	$idEncuesta = $_SESSION['id_encuesta'];

	$pregunta =$_POST['pregunta'];

    $codigoPregunta = 0;

	$consulta = "SELECT MAX(codigoPregunta) AS code FROM preguntas";

	$producto =  mysqli_query($mysqli, $consulta);

	if ($producto) {
	
		$maxCodeArray = mysqli_fetch_assoc($producto);

		$codigo =  $maxCodeArray['code'];
		if ($codigo) {
			$codigoPregunta = $codigo + 1;	
		}else{
			$codigoPregunta = 1;
		}

		//insert
		// Insertamos la nueva pregunta
		$sql = "INSERT INTO preguntas (codigoPregunta, textoPregunta, idenc) VALUES ('$codigoPregunta', '$pregunta', '$idEncuesta')";
		$resultado = mysqli_query($mysqli, $sql);

		//Tomamos el id de la pregunta por su codigo
		$sql = "SELECT * FROM preguntas WHERE codigoPregunta = " . $idEncuesta;
		$resultado = mysqli_query($mysqli, $sql);
		if ($resultado){
			$productoArray = mysqli_fetch_assoc($resultado);	
			if (isset($productoArray['idPreg'])) {
				@$id = $productoArray['idPreg'];
			}
			// echo $id;
			// Agregar el id de la pregunta creada en la variable global.
			 $id = @$_SESSION['idPreg'];
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
	echo '<script language="javascript">alert("Pregunta enviada correctamente"); window.location.href="crear-respuestas.php";</script>';
?>
