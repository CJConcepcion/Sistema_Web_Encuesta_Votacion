<!DOCTYPE html>

<?php
require_once("./../conexion.php");
error_reporting(E_ALL ^ E_NOTICE);
session_start();?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Votaci&oacute;n</title>
	<link href="./../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<style>

	body{
		background-size: 100%;


	}
	
	.contenedor{

		border-color: black;
		border:20px;
		margin-top: 20px;
		margin: 50px auto;
		border-radius: 10px;
		margin-right: 25%;
		margin-left: 25%;
		width: 50%;
		height: 500px;
		background-color:rgba(42,153,157);

	}
	.sub{
		color: rgba(0, 77, 117, 0.8);
		font-family: Courier New;
		font-size: 40px;
	}

	.boton{

		float: right;
		margin-right: 5px;
		margin-top: 30px;
		padding: 5px;

	}

	#fuente{
		font-family: Arial Narrow;
		text-align: center;
		font-size: 16px;
		height: 25px;
		vertical-align:middle; 
		text-align:center
	}
	#fuente2{
		font-family: Arial Narrow;
		text-align: center;
		font-size: 18px;
		height: 20px;
	}
	#new{
		background-color: rgba(104,166,213,0.4);
	}
	#new:hover{
		text-transform: rgba(104,166,213,0.4);
	}

	#table{
		/*background-color: rgba(0, 202, 255, 0.6);*/
		background-color: #eee;
		display: inline-block;
		padding: 20px;
		margin-right: 20px;
		margin-bottom: 5px;
		border-radius: 15px;
		width: 25.5%;
		height: 265px;
		font-family: Arial Narrow;
		font-size: 18px;
		padding: 3% 3% 0 3%;
	}

	#table:hover{
		background-color: rgba(99, 107, 118, 0.8);
	}

	table{
		width: 100%;
	}

	#img{
		width: 80px;
		height: 75px;
		align-content: center;
		
	}
	.text-center{
		color: rgba(0, 77, 117, 0.8);
		font-family: Century Gothic;
		font-size: 40px;
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
		padding: 11px;

	}
	
	.submit:hover{
		cursor: pointer;
		-webkit-transform:scale(1.0);
		transform:scale(1.0);
		-webkit-box-shadow: 0px 0px 3px 3px dodgerblue ;
		color: white;
	}

	.input{
		float: center;
		border: 0px;
		width: 70px;
		height: 40px;
		background: red;
		transition: all .3s cubic-bezier(0.67, 0.17, 0.40, 0.83);
		justify-content: center;
		align-items: center;	
		font-family: Arial Narrow;
		font-size: 15px;
		color: white;
		border-radius: 3px;
		padding: 11px;

	}
	
	.input:hover{
		cursor: pointer;
		-webkit-transform:scale(1.0);
		transform:scale(1.0);
		-webkit-box-shadow: 0px 0px 3px 3px red ;
		color: white;
	}

/*
Responsive
<--------------------------------------------------------------->*/
@media screen and (max-width:290px){
	body{
		background-size: 50%;
	}
	.text-center{
		font-size: 30px;
	}

	.sub{
		font-size: 25px;
	}
	.title{
		font-size: 35px;
		color: rgba(0, 77, 117, 0.8);
		font-family: Arial Narrow;
	}

	#table{
		/*background-color: rgba(0, 202, 255, 0.6);*/
		background-color: #eee;
		display: inline-block;
		padding: 4px;
		margin-right: 10px;
		/*margin-bottom: 5px;*/
		border-radius: 10px;
		width: 75%;
		height: 210px;
		font-family: Arial Narrow;
		font-size: 16px;
		padding: 0 0 3% 5%;
	}

	#img{
		margin-top: 15px;
		width: 40px;
		height: 40px;
		align-content: center;

	}

}

@media screen and (max-width:450px){
	body{
		background-size: 50%;
	}
	.text-center{
		font-size: 30px;
	}

	.sub{
		font-size: 25px;
	}
	.title{
		font-size: 35px;
		color: rgba(0, 77, 117, 0.8);
		font-family: Arial Narrow;
	}

	#table{
		/*background-color: rgba(0, 202, 255, 0.6);*/
		background-color: #eee;
		display: inline-block;
		padding: 4px;
		margin-right: 10px;
		/*margin-bottom: 5px;*/
		border-radius: 10px;
		width: 50%;
		height: 210px;
		font-family: Arial Narrow;
		font-size: 16px;
		padding: 0 0 3% 5%;
	}

	#img{
		margin-top: 15px;
		width: 40px;
		height: 40px;
		align-content: center;

	}

}

@media screen and (max-width:620px){
	body{
		background-size: 50%;
	}
	.text-center{
		font-size: 30px;
	}

	.sub{
		font-size: 25px;
	}
	.title{
		font-size: 35px;
		color: rgba(0, 77, 117, 0.8);
		font-family: Arial Narrow;
	}

	#table{
		/*background-color: rgba(0, 202, 255, 0.6);*/
		background-color: #eee;
		display: inline-block;
		padding: 4px;
		margin-right: 10px;
		/*margin-bottom: 5px;*/
		border-radius: 10px;
		width: 40%;
		height: 210px;
		font-family: Arial Narrow;
		font-size: 16px;
		padding: 0 0 3% 5%;
	}

	#img{
		margin-top: 15px;
		width: 40px;
		height: 40px;
		align-content: center;

	}

}

@media screen and (max-width:770px){
	body{
		background-size: 50%;
	}
	.text-center{
		font-size: 30px;
	}

	.sub{
		font-size: 25px;
	}
	.title{
		font-size: 35px;
		color: rgba(0, 77, 117, 0.8);
		font-family: Arial Narrow;
	}

	#table{
		/*background-color: rgba(0, 202, 255, 0.6);*/
		background-color: #eee;
		display: inline-block;
		padding: 4px;
		margin-right: 10px;
		/*margin-bottom: 5px;*/
		border-radius: 10px;
		width: 30%;
		height: 210px;
		font-family: Arial Narrow;
		font-size: 16px;
		padding: 0 0 3% 5%;
	}

	#img{
		margin-top: 15px;
		width: 40px;
		height: 40px;
		align-content: center;

	}

}
</style>

<body>

	<div class="table-users">
		<div class="boton">
			<a href="./../index2.php"><button  class="btn btn-danger">X</button></a>
		</div>
		<br>
		<center><img width="170" src="./../images/logo.png"></center> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="text-center"><font><center>SISTEMA DE VOTACI&Oacute;N</center></font></h1>
				</div>
			</div>
			<br>
		</div>
		<div class="center-block col-md-4 col-xs-8">
			<td><?php echo "<center class='sub'>Bienvenido/a</font>"."<center class = 'title'><strong> <br>".$_SESSION["nombre"]."</strong></font></center>";
			?></td><br>
			<h4> Elija un candidato</h4>
			<form id="myForm" name="acceso" action="votar.php" role="form" method="post">
				<div class="form-group">
					<br>

					<?php

					$sql="SELECT * FROM candidatos ";
					$resultado=mysqli_query($mysqli,$sql);


					$query=mysqli_num_rows($resultado);

					while($arreglo=mysqli_fetch_array($resultado)){
						$id = $arreglo ['id'];
						echo "<table id = 'table'>";
						echo "<th>";
						?>
						
						<?php
						echo "<img id = 'img' src = './../images/$arreglo[7]'><br><br>";
						echo "$arreglo[2]<br>";
						echo "$arreglo[5]<br>";?>
						<br>
						<table>
							<tr>
								<td>
									
									<button type ="submit" class="submit" name="list-candidatos" value="<?php echo $id; ?>"><strong>Votar</strong></button>
									<a style="text-decoration: none;"  type = "submit" class="input" href="./../index2.php"><strong>Cancelar</strong></a>
									
									
								</td>

							</tr>
						</table>

						<?php

						echo "</th>";
					}
					echo "</table>"

					?>

					
				</form>

				<script src="./../bootstrap/js/jquery-1.8.3.min.js"></script>
				<script src="./../bootstrap/js/bootstrap.min.js"></script>
				<!-- <script type="text/javascript" src="test.js"></script> -->
			</div>
		</form>

	</body>
	</html>
