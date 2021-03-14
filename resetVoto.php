
<?php 
require ('conexion.php');

$sql = "SELECT * FROM sesion";
$query = "UPDATE sesion SET voto = 0 WHERE voto = 1";
mysqli_query($mysqli, $query);

$consulta = "UPDATE sesion SET votoEncuesta = 0 WHERE votoEncuesta = 1";
mysqli_query($mysqli, $consulta);


if (!$query && !$consulta) {
	echo '<script language="javascript">alert("Lo sentimos... Hubo un error en la actualizacion de los datos");</script>';
}else{
	echo '<script language="javascript">alert("La actualizacion de los datos se ejecuto de manera exitosa"); window.location.href="agregarUsuarios.php";</script>';
}

 ?>