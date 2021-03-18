<?php
	
	// Conectamos con la base de datos
	require('./../conexion.php');   

	// id de la pregunta
	$respuesta = $_POST['resp'];

	// Seleccionamos  el id maximo de las preguntas creadas.
	$consulta = "SELECT MAX(idPreg) AS id FROM preguntas";
	$resultado = mysqli_query($mysqli, $consulta);
	$max = mysqli_fetch_assoc($resultado);

	$code = $max['id'];

	#Insertamos la respuesta en la tabla
	$sql = "INSERT INTO respuestas (texto, votoEnc, idencPreg) VALUES ('$respuesta', 0 , '$code')";
	$resultado = mysqli_query($mysqli, $sql);
		
?>

<?php
	echo '<script language="javascript">alert("La opcion ha sido enviada correctamente"); window.location.href="crear-respuestas.php";</script>';
?>
