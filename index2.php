<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['nombre']) {
		header("Location:index.php");
	}elseif (@$_SESSION['rol']==12) {
		header("Location:administrador.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Juan XXIII</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

  </head>
<body data-offset="40" style="background-attachment: fixed">
	
<div class="container">
	<img class="images" src="images/logoblanco.png">
<header class="header">
<br>	
<div class="row">
	<h1 style="font-family: Courier New; font-size: 60px; text-align: center;">PORTAL DE VOTACIONES Y ENCUESTAS</h1>

</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>

<style type="text/css">

	body{
	background: #00416A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E4E5E6, #00416A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E4E5E6, #00416A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


	}

.relation{
	margin-left: 40%;
}

.relation:hover{
border-radius:20%;
-webkit-border-radius:20%;
box-shadow: 0px 0px 2px 2px #3498DB ;
-webkit-box-shadow: 0px 0px 5px 5px #3498DB ;
transform: rotate(360deg);
-webkit-transform: rotate(360deg);
}

.span4{
	margin-left: 12%;
}

.thumbnail:hover{
-webkit-transform:scale(1.0);
transform:scale(1.0);
-webkit-box-shadow: 0px 0px 15px 15px #3498DB ;
}

#foot{
	font-family: Arial Narrow;
	font-size: 18px;
}
.botVot{
	font-family: Courier New; 
	color: rgba(248,80,50,1); 
	font-size: 50px;

}	

.images{
	
	width: 190px;
	float: right;
	position: relative;
	display: flex;
	margin-right: -120px;
}
</style>
<!-- ======================================================================================================================== -->
<h2 align="center" class="botVot">Actividades</h2>
<br>
<div class="row">
	<div class="span4">
		<div class="thumbnail">
			<h3 style="text-align:center">Elecciones</h3>	
			<a href="votar/index3.php" title="HAGA CLICK"><img src="images/algebra.jpg" /></a>
				<div class="caption">
					<center><strong><em><a href="votar/index3.php">ENTRAR</a></strong></center></em>
					<br/>
				</div>
		</div>
	</div>
		<div class="span4">
		<div class="thumbnail">
			<h3 style="text-align:center">Encuestas</h3>	
			<a href="encuesta/ejecutarEncuesta.php" title="HAGA CLICK"><img src="images/images.jpg" /></a>
				<div class="caption">
					<center><strong><em><a href="encuesta/ejecutarEncuesta.php">ENTRAR</a></strong></center></em>
					<br/>
				</div>
		</div>
	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="content-foo text-light">
        <div class="container">
    
            <div id="course-footer"></div>
    
            <div class="row">
    
                    <div class="col-md-8">
                        
    
                        <div class="logininfo" id="foot">Usted se ha identificado como <strong><?php echo $_SESSION['nombre'];?></strong></div>
    
                        <div class="homelink"><a href="index.php" id="foot">Inicio</a></div>
    
    
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
    
	</style>
  </body>
</html>

<script type="text/javascript">
	
</script>