  <!DOCTYPE html>
  <html>
  <head>

  	<meta charset="utf-8">
  		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
  		<!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
      <!-- <script type="text/javascript" src="bootstrap/js/bootbox.js"></script> -->
  	<title>JUAN XXIII</title>
  </head>
  <body background="images/fondotot.jpg" style="background-attachment: fixed" >

<style type="text/css">
/* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
/* End Fonts */
/* Start Global rules */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
/* End Global rules */

/* Start body rules */
body {
     background: #E0EAFC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

background-attachment: fixed;
  background-repeat: no-repeat;

    font-family: 'Vibur', cursive;
/*   the main font */
    font-family: 'Abel', sans-serif;
opacity: .95;
/* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
}



/* |||||||||||||||||||||||||||||||||||||||||||||*/
/* //////////////////////////////////////////// */




/* End body rules */

/* Start form  attributes */
form {
    margin-top: 40px;
    width: 490px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 4%;
    background: #457fca;  /* fallback for old browsers */
background: #abbaab;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ffffff, #abbaab);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ffffff, #abbaab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}
/* form Container */
form .con {
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: space-around;
    justify-content: space-around;
  
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  
      margin: 0 auto;
}

/* the header form form */
header {
    margin: 2% auto 10% auto;
    text-align: center;
}
/* Login title form form */
header h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
}
/*  A welcome message or an explanation of the login form */
header p {letter-spacing: 0.05em;}

.input-item {
    background: #fff;
    color: #333;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}



/* Show/hide password Font Icon */
#eye {
    background: #fff;
    color: #333;
  
    margin: 5.9px 0 0 0;
    margin-left: -20px;
    padding: 15px 9px 19px 0px;
    border-radius: 0px 5px 5px 0px;
  
    float: right;
    position: relative;
    right: 1%;
    top: -.2%;
    z-index: 5;
    
    cursor: pointer;
}
/* inputs form  */
input[class="form-input"]{
    width: 270px;
    height: 50px;
  
    margin-top: 2%;
    padding: 15px;
    
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
    
}
input[id="txt-input"] {width: 270px;}
/* focus  */
input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
}

/* input[type="text"] {min-width: 250px;} */
/* buttons  */
button {
    display: inline-block;
    color: #252537;
  
    width: 280px;
    height: 50px;
  
    padding: 0 20px;
    background: #fff;
    border-radius: 5px;
    
    outline: none;
    border: none;
  
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    
    margin: 7% auto;
    letter-spacing: 0.05em;
}
/* Submits */
.submits {
    width: 48%;
    display: inline-block;
    float: left;
    margin-left: 2%;
}

/*       Forgot Password button FAF3DD  */
.frgt-pass {background: transparent;}

/*     Sign Up button  */
.sign-up {background: #B8F2E6;}


/* buttons hover */
button:hover {
    transform: translatey(3px);
    box-shadow: none;
}

/* buttons hover Animation */
button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
    0% {
        transform: translateY(3px);
    }
    100% {
        transform: translateY(5px);
    }
}

.btn2{
    display: inline-flex;
    color: #252537;
  
    width: 90px;
    height: 50px;
  
    padding: 4px 12px;
    background: #fff;
    border-radius: 5px;
    
    outline: none;
    border: none;
  
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    
    margin: 7% auto;
    letter-spacing: 0.05em;
    text-decoration: none;
    outline: none;
}

.btn2:hover {
    transform: translatey(3px);
    box-shadow: none;
}

.btn2:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}

  img{
  width: 10%;
  position: absolute;
  padding: 0 15px 0 0;
  margin-left: 8%;
}

</style>

<div class="overlay">

<!-- LOGN IN FORM by Omar Dsoky -->
<form method="post" action="">
<a class="btn btn-danger" style="float: right;" title="Salir" href="agregarUsuarios.php">X</a>
<img class="img" src="images/logo.png"><br><br>
  <br><br>  
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Nuevos Registros</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>Registre a nuevos usuarios en este espacio</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
     
      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" name="realname" type="text" placeholder="Name" required>
     
      <br>

       <!--   user ced -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user ced Input-->
         <input class="form-input" id="txt-input" name="cedula" type="text" placeholder="DNI" required>
     
      <br>

            <!--   user E-mail -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" name="nick" type="text" placeholder="E-mail" required>
     
      <br>
     
           <!--  Insert Password -->
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" name="pass" placeholder="Password" id="pwd" required>

      <br>
     
           <!--  Repeat Password -->
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" name="rpass" type="password" placeholder="Repeat Password" id="pwd" required>
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     
     
      <br>
<!--      buttons -->
<!--      button LogIn -->

      <button class="log-in" type="submit" name="submit"> Registrar </button>
      <!-- <input  class="btn" type="submit" name="submit" value="Registrar"/> -->
   </div>
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
</form>
</div>

  <?php
  require ("conexion.php");
  		if(isset($_POST['submit'])){
  			require("registro.php");
  			//header("location:agregarUsuarios.php");
  		}
  	?>
  <!--Fin formulario registro -->

  	
  </body>
  </html>

