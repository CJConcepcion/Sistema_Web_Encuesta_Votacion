<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Votación</title>


<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">


</head>



<style>

body{


background-image: url(img/voto.png);


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




}

.contenedor:hover{

transition: .8s;
background-color:rgba(0,0,0 ,.2);
box-shadow:inset;
   

}


.boton{

float: right;

}


</style>

<body>

<?php
   require_once("conexion.php");

    
		error_reporting(E_ALL ^ E_NOTICE);
$vacio = isset($_POST['variable']) ? $_POST['variable'] : null ;
    $acceso = isset($_POST['variable']) ? $_POST['variable'] : null ;
	 session_start();
        $cedula=$_SESSION["cedula_alumno"];
     $carrera=$_SESSION["carrera"];
 if (empty($acceso)) {
   
}
    if (isset($_POST["municipios"])){
	 $municipio=$_POST["municipios"];
	}else{
	$municipio="";
	}

if (isset($_POST["parroquias"])){
	 $parroquias=$_POST["parroquias"];
	}else{
	$parroquias="";
	}
       if (isset($_POST["nombre"])){
	 $nombre=$_POST["nombre"];
	}else{
	$nombre="";
	}

if (isset($_POST["cedula_candidato"])){
	 $cedula_candidato=$_POST["cedula_candidato"];
	}else{
	$cedula_candidato="";
	}
 if (isset($_POST["alumno"])) {
    $alumno=$_POST["alumno"];
}
     if (isset($_POST["cod_candidato"])) {
    $cod_candidato=$_POST["cod_candidato"];
}
     if (isset($_POST["cedula_alumno"])) {
    $alu=$_POST["cedula_alumno"];
}


if (isset($_POST["boton"])) {
    $boton=$_POST["boton"];
	switch ($boton) {
		case "votar":

          
           
		$sql="update alumnos set voto='1', cod_candidato='$municipio' where cedula_Alumno='$cedula'";
		$resultado=mysqli_query($cx,$sql);
		$nr=mysqli_affected_rows($resultado);
     
        		?>
         
			<script>
				 alert("Gracias por votar");
				 window.location="index.php";
			</script>   
			<?php		
		break;
   
}

}

?>

<div class="contenedor">
	<div class="boton">
	<a href="votar.php"><button  class="btn btn-danger">X</button></a>
    </div>
	<br><br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1 class="text-center"><font color="white" size="7" face="Algerian">Sistema de Votación</font></h1>
    </div>
  </div>
  <br>
</div>
 <div class="center-block col-md-4 col-xs-8">
		<td><?php echo "<center><font size='6' color='white' face='Algerian'>Bienvenido </font>"."<center><font size='6' face='Algerian' color='white'>".$_SESSION["nombre"]."</font></center>"; 

				?></td>
<form name ="acceso" action="menu2.php" role="form" method="post">
  <div class="form-group">
<br>
<br>
						<fieldset>
							<legend><em><strong><font color="white">Candidatos</font></strong></em></legend>
						<?php
						
							$sql="select * from candidatos";
							$resultado=mysqli_query($cx,$sql);
							$num_reg=mysqli_num_rows($resultado);
						?>
							<select name="municipios" onchange="submit();">
							<option value="" >Seleccione Su Candidato </option>
							<?php
								for ($i=0;$i<$num_reg;$i++){

							$reg=mysqli_fetch_array($resultado);
                                    $codigomun=$reg["cedula_candidato"];
								$nombre=$reg["nombre"];
							?>
								<option value="<?php echo $codigomun; ?>"<?php if ($municipio==$codigomun){echo "selected='selected'";}?>><?php echo $nombre; ?></option>
								
							<?php
							}
						
							?>
						</select>
					</fieldset>
					</td> 

<br>
   <br>
   

   <input type ="submit" class="btn btn-primary" name="boton" Value="votar">
							 <input type ="submit"  class="btn btn-danger" name="boton" Value="Cancelar">
</form>



</div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>


<script src="js/bootstrap.js"></script>
</body>
</html>
