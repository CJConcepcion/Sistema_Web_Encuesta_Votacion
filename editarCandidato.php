<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:index.php");
}
?>		
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Juan XXIII</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">

	<style type="text/css">
.botVot{
	font-family: Courier New; 
	color: rgba(248,80,50,1); 
	font-size: 50px;

}
.btn{
  position: relative;
  display: flex;
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

.btn2::before{
  width: 50%;
  height: 0%;
}
.btn2:hover::before{
  height: 100%;
}

#fuente{
	font-family: Agency FB;
	text-align: center;
	font-size: 20px;
	height: 45px;
	vertical-align:middle; 
	text-align:center
}

#fuente2{
	font-family: Courier;
	text-align: center;
	font-size: 18px;
	height: 40px;
}
#fuente3{
	color: red;
	font-family: Courier;
	text-align: center;
	font-size: 18px;
	height: 40px;
}
#new{
	background-color: rgba(104,166,213,0.4);
}
#new:hover{
	text-transform: rgba(104,166,213,0.4);
}
.encabezado{
	font-family: Courier New;
	font-size: 16px;
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
<h1 style="font-family: Courier New; font-size: 60px; text-align: center;">PORTAL DE CANDIDATOS</h1>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="administrador.php" class="encabezado"><strong>ADMIN. DEL SITIO</strong>
			</a></li>
				<li><a href="encuesta/prueba1/index1.php" class="encabezado">Encuestas</a></li>
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
		<li><a href="desconectar.php" class="encabezado" style="color: red;"><strong>Cerrar Sesión</strong>  </a></li>		 
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
		<h4 align="center" class="botVot">Edición de candidatos</h4>
		<hr>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("conexion.php");

		$sql="SELECT * FROM candidatos WHERE id=$id";
	//la variable  $mysqli viene de conexion que lo traigo con el require("conexion.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$cod=$row[1];
		    	$user=$row[2];
		    	$cedu=$row[3];
		    	$cargo=$row[4];
		    	$postulacion=$row[5];
		    }



		?>

		<form action="actualizarCandidato.php" method="post">
			<center>
				<p style="font-family: Courier; font-size: 20px; margin-bottom: 15px "> <strong>Id</strong><br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br></p>
				<p style="font-family: Courier; font-size: 20px; margin-bottom: 15px "><strong>C&oacute;digo</strong><br> <input type="text" name="cod_candidato" value="<?php echo $cod?>"><br></p>
				<p style="font-family: Courier; font-size: 20px; margin-bottom: 15px "><strong>Nombre</strong><br> <input type="text" nastyle="font-family: Courier; font-size: 20px; margin-bottom: 15px "name="nombre" value="<?php echo $user?>"><br></p>
				<p style="font-family: Courier; font-size: 20px; margin-bottom: 15px "><strong>C&eacute;dula</strong><br> <input type="text" name="cedula" value="<?php echo $cedu?>"><br></p>
				<p style="font-family: Courier; font-size: 20px; margin-bottom: 15px "><strong>Cargo actual</strong><br> <input type="text" name="puesto" value="<?php echo $cargo?>"><br></p>
				<p style="font-family: Courier; font-size: 20px; margin-bottom: 15px "><strong>Postulante a</strong><br> <input type="text" name="postulacion" value="<?php echo $postulacion?>"><br></p>
				
				<br>
				<input type="submit" value="Guardar" class="btn">
				</center>
			</form>
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

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

<hr class="soften"/>

</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

	</style>
  </body>
</html>


