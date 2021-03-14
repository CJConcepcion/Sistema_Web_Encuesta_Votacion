<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:index.php");
}elseif (@$_SESSION['rol']==13) {
	header("Location:index2.php");
}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Juan XXIII</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

</head>
<body data-offset="40" style="background-attachment: fixed">

	<style type="text/css">

		body{
			background: #00416A;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #E4E5E6, #00416A);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #E4E5E6, #00416A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		.relation{
			margin-left: 10%;
		}

/*.relation:hover{
border-radius:30%;
-webkit-border-radius:30%;
box-shadow: 0px 0px 15px 15px #3498DB ;
-webkit-box-shadow: 0px 0px 15px 15px #3498DB ;
transform: rotate(360deg);
-webkit-transform: rotate(360deg);
}*/

.span4{
	margin-left: 12%;
}

.thumbnail:hover{
	-webkit-transform:scale(1.1);
	transform:scale(1.1);
	-webkit-box-shadow: 0px 0px 15px 15px #3498DB ;
}

.botVot{
	font-family: Courier New; 
	color: rgba(248,80,50,1); 
	font-size: 50px;

}
.btn{
	position: relative;
	display: inline-block;
	color: grey;
	font-size: 20px;
	font-family: "Courier New";
	text-decoration: none;
	margin: 30px 0;
	border: 2px;
	padding: 5px 65px;
	text-transform: uppercase;
	overflow: hidden;
	transition: 1s all ease;
}

#new{
	background-color: rgba(104,166,213,0.4);
}
#new:hover{
	text-transform: rgba(104,166,213,0.4);
}
.encabezado{
	font-family: Courier New;
	font-size: 18px;
	margin-top: 10px;
	vertical-align:middle;
}
#foot{
	font-family: Arial Narrow;
	font-size: 20px;
}

.nav > li {
	float:left;
}
ul, ol {
	list-style:none;
}
.nav li a {
	background: rgba(255,255,255,1);
	color: #fffefe;
	text-decoration:none;
	padding:10px 12px;
	display:block;
}
.nav li a:hover {
	background-color:#f5f5f5;
}
.nav li ul {
	display:none;
	position:absolute;
	min-width:140px;
}
.nav li:hover > ul {
	display:block;
}

</style>

<div class="container">
	<header class="header">
		<div class="row">
			<h1 style="font-family: Courier New; font-size: 60px; text-align: center;">PORTAL DE ADMINISTRACI&Oacute;N</h1>
			<!--<img src="images/logo.png" width="15%" height="15%" align="right"> -->
		</div>
	</header>

  <!-- Navbar
  	================================================== -->

  	<div class="navbar">
  		<div class="navbar-inner">
  			<div class="container">
  				<div class="nav-collapse">
  					<ul class="nav">
  						<li class=""><a href="administrador.php" class="encabezado"><strong>INICIO</strong></a></li>
  						<li><a href="" class="encabezado">Encuestas</a>
  							<ul>
  								<li><a href="encuesta/index.html" class="encabezado" style="color: grey;">+ Nueva encuesta</a></li>
  								<li><a href="encuesta/tablaEncuestas.php" class="encabezado" style="color: grey;">Encuestas existentes</a></li>
  							</ul>
  						</li>
  						<li><a href="votacion.php" class="encabezado">Votaciones</a></li>
  						<li><a href="" class="encabezado">Registros</a>
  							<ul>
  								<li><a href="agregarUsuarios.php" class="encabezado" style="color: grey;">Usuarios</a></li>
  								<li><a href="tablaVotacion.php" class="encabezado" style="color: grey;">Candidatos</a></li>
  							</ul>
  						</li>


  					</ul>
  					<form action="#" class="navbar-search form-inline" style="margin-top:6px">

  					</form>
  					<ul class="nav pull-right">
  						<li><a href="" class="encabezado">User <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
  						<li><a href="desconectar.php" class="encabezado" style="color: red;"><strong>SALIR</strong></a></li>			 
  					</ul>
  				</div><!-- /.nav-collapse -->
  			</div>
  		</div><!-- /navbar-inner -->
  	</div>
  	<!-- ======================================================================================================================== -->
  	<div class="row">



  		<div class="span12">

  			<div class="caption">

  				<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
  				<div class="well well-small">
  					<hr class="soft"/>
  					<h2 align="center" class="botVot">Centro De Actividades</h2>
  					<div class="row-fluid">
  						<hr>		
  					</div>

  					<div class="row">
  						<div class="span4">
  							<div class="thumbnail">
  								<br><br>
  								<!--<h3 style="text-align:center" class="text">Encuesta</h3>-->	
  								<a href="encuesta/index.html"><img src="images/agregar.png" class="relation"/></a>
  								<div class="caption">
  									<a href="encuesta/index.html" style="text-align: center; font-family: Arial Narrow;"><h3 style="text-align: center;" style="text-decoration: none;"> A&ntilde;adir Encuesta</h3></a>
  									<br/>
  								</div>
  							</div>
  						</div>

  						<div class="span4">
  							<div class="thumbnail">
  								<br><br>
  								<!--<h3 style="text-align:center" class="text">Votaciones</h3>-->
  								<a href="votacion.php"><img src="images/vote_checkmark_icon_154125.png" class="relation"/></a>	
  								<div class="caption">
  									<a href="votacion.php" style="text-align: center; font-family: Arial Narrow;"><h3 style="text-align: center;" style="text-decoration: none;"> A&ntilde;adir Votaciones</h3></a>
  									<br/>
  								</div>
  							</div>

  						</div>


  						<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
  					</div>
  					<hr>
  				</div>
  			</div>
<!-- Footer
	================================================== -->
	<hr class="soften"/>
	<footer class="footer">
		<br><br>
		<footer class="content-foo text-light">
			<div class="container">

				<div id="course-footer"></div>

				<div class="row">

					<div class="col-md-8">


						<div class="logininfo" id="foot">Usted se ha identificado como <strong><?php echo $_SESSION['nombre'];?></strong></div>

						<div class="homelink"><a href="index.php" id="foot">Incio</a></div>


					</div>

					<div class="col-md-4">
						<div class="brandbox">

						</div>
					</div>

				</div>

				<p id="foot">Cooperativa Juan XXIII</p> 
				<p id="foot">(507) 998-4575, 998-3700, 959-7146, 958-9297</p>
				<a href="https://www.juan-xxiii.com/" id="foot">P&aacute;gina Principal</a>

			</footer>
			<hr>
		</div><!-- /container -->

    <!-- Le javascript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    	<script src="bootstrap/js/bootstrap.min.js"></script>
    </style>
</body>
</html>