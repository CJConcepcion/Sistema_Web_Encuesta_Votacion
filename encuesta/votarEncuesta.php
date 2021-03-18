

<?php 
  session_start();
  $userId = $_SESSION['id'];

  include './../conexion.php';

  $query = "SELECT votoEncuesta FROM sesion WHERE id = '$userId'";
  $usuario = mysqli_query($mysqli, $query);
  $user = mysqli_fetch_assoc($usuario);

  $voto = $user['votoEncuesta'];

  if ($voto > 0) {
    ?>  
        <script>
            alert("Ya usted lleno la encuesta");
            window.location="./../index2.php";
        </script>

        <?php
  }else{

  $sql = "SELECT * FROM encuestas ORDER BY codigoEncuesta DESC LIMIT 1";
  $query = mysqli_query($mysqli, $sql);
  while($arreglo=mysqli_fetch_array($query)){
    $titulo = $arreglo ['titulo'];
    $id = $arreglo ['id_encuesta'];
  }


  $sql = "SELECT * FROM preguntas WHERE idenc = $id";
  $query = mysqli_query($mysqli, $sql);
  $cont = 1;
  $respCounter = 1;
  $consulta = '';
  $opcion = '';

  while ($row = mysqli_fetch_array($query)) {
    $pregunta = $row['textoPregunta'];
    $idP = $row['idPreg'];

    $exe = "SELECT * FROM respuestas WHERE idencPreg = $idP";
    $exeR = mysqli_query($mysqli, $exe);

    if (!$exeR) {
      // echo "Hola";
    }else{
      while ($registro = mysqli_fetch_assoc($exeR)) {
        $texto = $registro['texto'];
        $idR = $registro['id_res'];

        if  (!empty($_POST['opcion_'.$respCounter])){
          $opcion = $_POST['opcion_'.$respCounter];
          $sql = "SELECT * FROM respuestas WHERE id_res = '$opcion'"; 
          $consulta = mysqli_query($mysqli,$sql); 
          $consult = mysqli_fetch_assoc($consulta);
          $votos = $consult['votoEnc'];
           
          //Incrementamos en uno los votos totales
          $newVotos = $votos + 1;

          $consulta = "UPDATE respuestas SET votoEnc = '$newVotos' WHERE id_res = '$opcion'";
          mysqli_query($mysqli,$consulta);

        }
        
        $respCounter = $respCounter + 1;
      }

      // Update user votos 
      $updateUserVotes = "UPDATE sesion SET votoEncuesta = 1 WHERE  id = '$userId'";
      mysqli_query($mysqli, $updateUserVotes);
    }
    $cont++;
  }

      ?>  
        <script>
            alert("Gracias por llenar la encuesta");
            window.location="./../index2.php";
        </script>

        <?php
}
?>