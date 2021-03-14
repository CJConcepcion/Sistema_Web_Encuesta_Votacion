<?php
	
	$realname=$_POST['realname'];
	$ced = $_POST['cedula'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("conexion.php");
//la variable  $mysqli viene de conexion que lo traigo con el require("conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM sesion WHERE correo ='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el email designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				// require("conexion.php");
//la variable  $mysqli viene de conexion que lo traigo con el require("conexion.php");

				mysqli_query($mysqli,"INSERT INTO sesion (id, nombre, cedula_usuario, password, correo, passadmin, rol, voto) VALUES ('', '$realname', '$ced', '$pass', '$mail', '', '13', '');");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Las contraseñas no coinciden");</script> ';
		}

	
?>