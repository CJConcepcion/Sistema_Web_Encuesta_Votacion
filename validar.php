
<?php
session_start();
	require("conexion.php");

	$correo=$_POST['correo'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("conexion.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM sesion WHERE correo='$correo'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['passadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['nombre']=$f2['nombre'];
		//$_SESSION['rol']=$f2['rol'];
			echo '<script>alert("Bienvenido a la sala de administracion!...")</script> ';
			echo "<script>location.href='administrador.php'</script>";
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM sesion WHERE correo='$correo'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['nombre']=$f['nombre'];
			// $_SESSION['userEmail'] = $f['nombre'];
			// $_SESSION['userPw'] = $f['nombre'];
			//$_SESSION['rol']=$f['rol'];

			header("Location: index2.php");//cambiar index2 por la pestaña de acceso a las votaciones
		}else{
			echo '<script>alert("Lo sentimos, la contraseña o el usuario ingresado, es incorrecto. Verifique y vuelva a intentarlo...")</script> ';
			?>
				
			<?php
			
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("Este usuario no esxiste, favor comunicarse con el administrador para poder ingresar...")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>