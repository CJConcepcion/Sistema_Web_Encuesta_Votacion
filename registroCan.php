<?php
	$codigo = $_POST['cod'];
	$realname=$_POST['realname'];
	$cedu=$_POST['ced'];
	$puest=$_POST['cargo'];
	$postu=$_POST['post'];
	$image = $_POST['archivo'];


	require("conexion.php");

//la variable  $mysqli viene de conexion que lo traigo con el require("conexion.php");}

	// Inspeccionar cedula existente

	$checkcedula = mysqli_query($mysqli,"SELECT * FROM candidatos WHERE cedula ='$cedu'");
	$check_ced = mysqli_num_rows($checkcedula);
		if($cedu==$cedu){
			if($check_ced > 0){
				echo ' <script language="javascript">alert("Atencion, ya existe un candidato registrado con esta cedula, verifique los datos e intentelo nuevamente");</script> ';
			}else{
				
				//require("conexion.php");
//la variable  $mysqli viene de conexion que lo traigo con el require("conexion.php");

				// -------------------------Subir imagen--------------------------

		
				

				// Insertamos en la tabla candidatos

				mysqli_query($mysqli,"INSERT INTO candidatos VALUES('', '$codigo','$realname','$cedu','$puest','$postu','','$image')");

				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Datos insertados correctamente");</script> ';

			// 	if (!is_dir($directorio)) {
			// 		mkdir($directorio);
			// 	}
				
			// 	if (!move_uploaded_file($_FILES['name']['tyoe'], $directorio)) {
			// 		echo "Error en cargar el archivo";
			// 	}else{
			// 	alert('Insercion de datos correctamente');}
				
			}
			
		}else{
			echo 'Insercion de datos incorrectos';
		}
	
?>