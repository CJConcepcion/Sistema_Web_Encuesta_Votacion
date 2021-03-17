<!DOCTYPE html>
<style type="text/css">
	.encabezado{
	font-family: Courier New;
	font-size: 18px;
}
</style>
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class="" ><a href="index2.php" class="encabezado"><strong>PRINCIPAL</strong> </a></li>
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
				<li><a href="" class="encabezado">User <strong><?php echo $_SESSION['nombre'];?></strong> </a></li>
			  <li><a href="desconectar.php" class="encabezado" style="color: red;"> <strong>SALIR</strong></a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
</html>