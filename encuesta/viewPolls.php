
			
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="./../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<style type="text/css">

		@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');

		img{
			width: 180px;
			margin-top: 50px;
			margin: 30px;
			margin-left: 100px;
			margin-right: 50px;
		}

		#dan{
			float: right;
			margin-top: 30px;
			margin-right: 30px;
		}

		.title{
			background-color: #398B93;
			color: white;
			font-size: 1.5em;
			padding: 1rem;
			text-align: center;
			text-transform: uppercase;
			border-radius: 10px;

		}
		
		.table-users {
			border: 1px solid #398B93;
			border-radius: 10px;
			box-shadow: 3px 3px 0 rgba(0,0,0,0.1);
			max-width: calc(100% - 2em);
			margin: 1em auto;
			overflow: hidden;
			width: 800px;
			cursor: pointer;

		}

		table {
			width: 100%;

		}
		
		td, th { 
			color: #398B93;
			padding: 10px;
			cursor: pointer;
			background-color: #398b9310;
		}
		th{
			background-color: #39849394;
			text-align: center;
			padding: 20px;
			font-size: 18px;
		}
		.preg{
			margin: 15px;
		}
	</style>

</script>

</head>
<body>
	<div class="table-users">
		<center>
			<a href="tablaEncuestas.php"><button id="dan" class="btn btn-danger">X</button></a>
			<img src="./../images/logo.png">
			<?php
			include './../conexion.php';

			$id = $_GET['id'];


			$sql = "SELECT * FROM encuestas WHERE id_encuesta = '$id'";
			$query = mysqli_query($mysqli, $sql);
			$arreglo=mysqli_fetch_array($query);
			$titulo = $arreglo['titulo'];	

			if (@!$titulo) {
				echo '<script language="javascript">alert("No se encontraron encuestas"); window.location.href="tablaEncuestas.php";</script>';
			}else{

				?>
				<table class="tab" cellpadding="0">
					<tr>
						<th>Preguntas/Respuestas</th>
						<th>Resultados</th>
					</tr>
					<tr>
						<div><strong class="title">T&iacute;tulo: <?php echo $titulo; ?></strong></div><br>
					</tr>
					
					<?php
					

					$sql = "SELECT * FROM preguntas WHERE idenc = $id";
					$query = mysqli_query($mysqli, $sql);
					$cont = 1;
					while ($row = mysqli_fetch_array($query)) {
						$pregunta = $row['textoPregunta'];
						$idP = $row['idPreg'];

						?>

						<?php

						$exe = "SELECT * FROM respuestas WHERE idencPreg = $idP";
						$exeR = mysqli_query($mysqli, $exe);

						
						if (!$exeR) {
							echo '<script language="javascript">alert("Error en su peticion"); window.location.href="tablaEncuestas.php";</script>';
						}else{?>
							<tr>

								<td colspan="2"><hr><strong><?php echo $cont; echo ". "; echo $pregunta; ?></strong></td>
							</tr>

							<?php
							while ($registro = mysqli_fetch_assoc($exeR)) {
								$texto = $registro['texto'];
								$idR = $registro['id_res'];
								$voto = $registro['votoEnc']?>
								<tr>
									<td colspan="0" class="preg"><?php echo $texto; ?></td>

									<td width="283" contenteditable="false" align="center"><?php echo $voto; ?></td>
								</tr>
								
							</tr>
							</tr><?php
						}
						
					}

					?>

					<?php $cont++; ?>

				<?php } ?>
			</table>

		</center>
		
	</div>
<?php } ?>
</body>
</html>