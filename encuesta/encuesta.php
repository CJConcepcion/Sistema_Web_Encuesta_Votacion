<?php
//Conectamos con la base de datos
	require('./../conexion.php'); 
	
//Seleccionamos la informacion de la última encuesta insertada
	$query = "SELECT * FROM encuestas ORDER BY fecha DESC LIMIT 0,1"; 
	$consulta = mysqli_query($mysqli, $query);

  if (!$consulta) {
    echo "no hay encuestas disponibles";
  }else{
    
	while($row = mysqli_fetch_array($consulta)){ 
		$titulo=$row["titulo"]; 
		$fecha=$row["fecha"];
		$id=$row['id_encuesta'];
}
?>
<body>
<form name="form1" method="post" action="votarEncuesta.php">
  <table width="350" border="1">
    <tr> 
      <td colspan="2"><strong>Titulo</strong>: <?php echo $titulo; ?>
        <input type="hidden" name="id" value="<?php echo $id;?>"></td>
    </tr>
    <?php
	$query = "SELECT texto, id_res FROM respuestas WHERE idenc='$id'";
	$sql = mysqli_query($mysqli, $query);
	while($row = mysqli_fetch_array($sql)){ 
		$texto=$row["texto"]; 
		$idres=$row["id_res"];
?>
    <tr> 
      <td width="51"><input type="radio" name="opcion" value="<?php echo $idres; ?>"></td>
      <td width="283"><?php echo $texto; ?></td>
    </tr>
    <?php } ?>
    <tr>
      <td><input type="submit" name="Submit" value="Enviar"></td>
		
      <td>Esta encuesta est&aacute; desde el <?php echo date('Y-m-d'); ?></td>
    </tr>
    <tr>
      <td colspan="2"><a href="">Ver resultados</a></td>
    </tr>
  </table>
  <a href="indexEncuesta.php">Volver</a>
</form>
</body>
<?php 
} ?>