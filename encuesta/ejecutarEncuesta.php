<!DOCTYPE html>

<?php 
	session_start();
	$_SESSION['nombre'];
?>

<html>
<head>
	<title></title>
<link href="./../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<style type="text/css">

	@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');


 		.submit, .input{
 			float: center;
			border: 0px;
  			width: 70px;
  			height: 40px;
  			background: dodgerblue;
  			transition: all .3s cubic-bezier(0.67, 0.17, 0.40, 0.83);
  			justify-content: center;
  			align-items: center;	
  			font-family: Arial Narrow;
  			font-size: 15px;
  			color: white;
  			border-radius: 3px;
  			padding: 10px; 	
 		}
 		
 		.submit:hover{
 			cursor: pointer;
 			-webkit-transform:scale(1.0);
			transform:scale(1.0);
			-webkit-box-shadow: 0px 0px 3px 3px dodgerblue ;
 		}

 		.input:hover{
 			cursor: pointer;
 			-webkit-transform:scale(1.0);
			transform:scale(1.0);
			-webkit-box-shadow: 0px 0px 3px 3px dodgerblue ;
 		}

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
   		border: 3px solid #398B93;
   		border-radius: 10px;
   		box-shadow: 10px 10px 0 rgba(94, 130, 115, 0.5);
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
   	color: white;
   	 background-color: #39849394;
   	 text-align: center;
   	 padding: 20px;
   	 font-size: 18px;
   	 border-radius: 10px 10px 0px 0px;
   }
   .preg{
   	margin: 15px;
   }

	</style>

</head>
<body>
	<div class="table-users">
	<center>
	<a href="./../index2.php"><button id="dan" class="btn btn-danger">X</button></a>
	<img src="./../images/logo.png">
		<?php
			include './../conexion.php';

			$sql = "SELECT * FROM encuestas ORDER BY codigoEncuesta DESC LIMIT 1";
			$query = mysqli_query($mysqli, $sql);
				while($arreglo=mysqli_fetch_array($query)){

					$titulo = $arreglo ['titulo'];
					$id = $arreglo ['id_encuesta'];
				}

				if (@!$titulo) {
					echo '<script language="javascript">alert("No se encontraron encuestas"); window.location.href="./../index2.php";</script>';
				}else{

		?>
		<form action="votarEncuesta.php" method="post" name="encuesta">
			<table class="tab" cellspacing="0">
				<tr>
					<th colspan="2"><em style="font-size: 20px; color: red;"><?php echo $_SESSION['nombre'];?></em>, resuelva la encuesta con cuidado seleccionando la opci&oacute;n de su preferencia.</th>
				</tr>
			
				<tr>
					<div><strong class="title">T&iacute;tulo: <?php echo $titulo; ?></strong></div><br>
					
				</tr>
				
		<?php
			
			$sql = "SELECT * FROM preguntas WHERE idenc = $id";
			$query = mysqli_query($mysqli, $sql);
			$cont = 1;
			$respCounter = 1;
			while ($row = mysqli_fetch_array($query)) {
				$pregunta = $row['textoPregunta'];
				$idP = $row['idPreg'];

				$exe = "SELECT * FROM respuestas WHERE idencPreg = $idP";
				$exeR = mysqli_query($mysqli, $exe);

				
				if (!$exeR) {
					// echo "Hola";
				}else{

					?>
						<tr>
							<td colspan="2" class="preg"><hr><strong><?php echo $cont; echo ". "; echo $pregunta; ?></strong></td>
						</tr>
					<?php
					
					
					while ($registro = mysqli_fetch_assoc($exeR)) {
						$texto = $registro['texto'];
						$idR = $registro['id_res'];

						?>
							<tr>
								<td width="20" align="center"><input type="checkbox"  name="opcion_<?php echo $respCounter; ?>" value="<?php echo $idR;?>"> </td>
								<td width="283"><?php echo $texto;?></td>
							</tr>
						<?php
						$respCounter = $respCounter + 1;
					}
				}
 				$cont++;
			}

			?>
			</table>

				<tr>
					<hr>
						<td><input type="submit" class="submit" name="Submit" value="Enviar"></td>
						<td><a href="ejecutarEncuesta.php"><input class="input" value="Cancelar"></a></td>
					<hr>	
				</tr>
		</form>

	</center>
		
	</div>
<?php } ?>
</body>
</html>