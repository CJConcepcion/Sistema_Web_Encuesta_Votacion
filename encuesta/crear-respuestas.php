<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="./../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<style type="text/css">

	@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');

		body{
			background: #E0EAFC;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

 			font-family: 'Overlock';
 			font-size: 18px;
  		}

		#main-content{
			width:40%;
			margin: 0 auto;
			margin-top:10%;
		}

/*		ul li{
			background: #eee;
			list-style: none;
			padding: 4px;
			margin-top:4px;
			display: block;
			width: 45%;
			cursor:pointer;
		}
*/
		#main-content{
			background-color: #b8c6db;
			background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
			padding: 6px;
			width: 50%;
			min-height: 370px;
			border-radius: 10px;
			-webkit-box-shadow: 0px 0px 15px 15px #b8c6db;
		}

		#main-content form label{
			font-family: 'Arial', sans-serif;
			opacity: .95;
			font-size: 18px;
		}

 		#main-content form input{
 			font-size: 15px;
 			display: flex;
 			margin-top: 4px;
 			padding: 10px;
 		}

		 #main-content form label{
 			margin-top: 8px;
 		
 		}

 		.button{
			border: 0px;
  			width: 120px;
  			height: 40px;
  			background: dodgerblue;
  			transition: all .3s cubic-bezier(0.67, 0.17, 0.40, 0.83);
  			justify-content: center;
  			align-items: center;	
  			font-family: Arial;
  			font-size: 10px;
  			color: white;
  			border-radius: 3px;
 		}
 		.but{
 			border: 0px;
  			width: 120px;
  			height: 40px;
  			background: dodgerblue;
  			transition: all .3s cubic-bezier(0.67, 0.17, 0.40, 0.83);
  			justify-content: center;
  			align-items: center;	
  			font-family: Arial;
  			font-size: 15px;
  			color: white;
  			border-radius: 3px;
 		}

 		.button:hover{
 			cursor: pointer;
 			-webkit-transform:scale(1.0);
			transform:scale(1.0);
			-webkit-box-shadow: 0px 0px 3px 3px dodgerblue ;
 		}

 		.but:hover{
 			cursor: pointer;
 			-webkit-transform:scale(1.0);
			transform:scale(1.0);
			-webkit-box-shadow: 0px 0px 3px 3px dodgerblue ;
 		}
 		.box{
 			border: 0px;
 			border-radius: 5px;
  			width: 310px;
  			height: 20px;
 		}

 		.subTitle{
 			display: inline-block;
 			margin-left: -160px;
 			padding: 5px;
 		}

 		#dan{
 			float: right;
 		}
 		img{
 			margin-top: 10px;
 			float: center;
 			width: 120px;
 		}

 		#main-back, #back{
 			float: right;
 		}
 		a{
 			float: right;
 			padding: 1px;
 		}

 		a:hover{
 			text-decoration: none;
 		}
	</style>

</head>
<body>
	<div id="main-content">
	<center>
	<a href="./../administrador.php"><button id="dan" class="btn btn-danger">X</button></a>
	<img src="./../images/logo.png">
		<div>
			<h2>Introduce las respuestas</h2>
		</div>
		<form id="form-respuestas" action="insertarRespuestas.php" method="post">
			<label class="subTitle">Introduce la Respuesta</label>
			<input type="text" class="box" name="resp" id="text-respuestas" placeholder="Ingresa respuesta" required="">
			<input type="submit" class="button" name="enviar" id="crear-respuestas" value="Crear Respuesta"><br>
			
		</form>
		<a href="crear-preguntas.php"><input type="submit" class="but" value="Nueva Pregunta"></a>
	</center>
		
	</div>
</body>
</html>