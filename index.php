<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
	<title>JUAN XXIII</title>
</head>
<body style="background-attachment: fixed;" >

	<style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');


body{
  background: #00416A;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #E4E5E6, #00416A);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #E4E5E6, #00416A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  font-family: 'Roboto', sans-serif;
  }
.title{
  font-family: Arial Narrow;
}


.container{
  /*border:1px solid white;*/
  width: 600px;
  height: 350px;
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  display: inline-flex; 
}
.backbox{  
  background-color: #00416A;
  height: 80%;
  position: absolute;
  transform: translate(0,-50%);
  top:50%;
  display: inline-flex;
  border-radius: 10px;
}

.frontbox{
  background-color: white;
  border-radius: 20px;
  height: 100%;
  width: 50%;
  z-index: 10;
  position: absolute;
  right:0;
  margin-right: 3%;
  margin-left: 3%;
  transition: right .8s ease-in-out;
}

.moving{
  right:45%;
}

.loginMsg, .signupMsg{
  width: 50%;
  height: 100%;
  font-size: 15px;
  box-sizing: border-box;
}

.loginMsg .title,
.signupMsg .title{
  font-weight: 300;
  font-size: 23px;
}

.loginMsg p,
.signupMsg p {
  font-weight: 100;
}

.textcontent{
  color:white;
  margin-top:65px;
  margin-left: 12%;
}

.loginMsg button,
.signupMsg button {
  background-color: #00416A;
  border: 2px solid white;
  border-radius: 10px;
  color:white;
  font-size: 12px;
  box-sizing: content-box;
  font-weight: 300;
  padding:10px;
  margin-top: 20px;
}

/* front box content*/
.login, .signup{
  padding: 20px;
  text-align: center;
}

.login h2,
.signup h2 {
  color: #242F78;
  font-size:26px; 
}

.inputbox{
  margin-top:30px; 
}
.login input {
  display: block;
  width: 100%;
  height: 40px;
  background-color: #f2f2f2;
  border: none;
  margin-bottom:20px;
  font-size: 12px;
  box-sizing: content-box;
}

.login button,
.signup button{
  background-color: #35B729;
  border: none;
  color:white;
  font-size: 12px;
  font-weight: 300;
  box-sizing: content-box;
  padding:10px;
  border-radius: 10px;
  width: 60px;
  position: absolute;
  right:30px;
  bottom: 30px;
  cursor: pointer;
}

/* Fade In & Out*/
.login p {
  cursor: pointer;
  color:#242F78;
  font-size:15px;
}

.loginMsg, .signupMsg{
  /*opacity: 1;*/
  transition: opacity .8s ease-in-out;
}

.visibility{
  opacity: 0;
}

.hide{
  display: none;
}
img{
  margin-top: -15px;
  width: 30%;
  float: right;
  margin-left: 50px;
  position: absolute;
 /* margin-left: 60%; */
}

.bot{
  margin-left: 40%;
  border: 0px;
  background: #00416A;
  transition: all .3s cubic-bezier(0.67, 0.17, 0.40, 0.83);
  justify-content: center;
  align-items: center;  
  font-family: Share;
  font-size: 15px;
  color: white;
  border-radius: 5px;
  padding: 12px;  
}

.bot:hover{
  cursor: pointer;
  -webkit-transform:scale(1.0);
  transform:scale(1.0);
  -webkit-box-shadow: 0px 0px 3px 3px dodgerblue ;
}



</style>

<form action="validar.php" method="post" id="formulario">
 <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">No puedes acceder?</p>
          <p>Rep&oacute;rtate con el administrador del sitio, de lo contrario, acceda con su usuario y contrase&ntilde;a.</p>
          <button id="switch1"> Acceder </button>
        </div>
      </div>
<!--       <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">Have an account?</p>
          <p>Log in to see all your collection.</p>
          <button id="switch2">LOG IN</button>
        </div>
      </div> -->
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
        <img src="images/logo.png"><br>
        <h2>LOG IN</h2>
        <div class="inputbox">
          <input type="text" name="correo" placeholder="  USUARIO" required="" autofocus="">
  
          <input type="password" name="pass" placeholder="  CONTRASEÑA" required="" autofocus="">
        </div>
        <!-- <p>FORGET PASSWORD?</p> -->
        </div>
        <input type="submit" name="" class="bot" value="INGRESAR">
      
</form>

    </div>
    <!-- frontbox -->
  </div>

		</td>
		</tr>
		</table></center>
		</div></div></center>
</body>
<br><br>
</html>