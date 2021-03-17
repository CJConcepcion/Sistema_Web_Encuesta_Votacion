<?php 
session_start();
    $id = $_POST['list-candidatos'];
    
    $userId = $_SESSION['id'];


    // echo $userId;
    // $testUserId = 54;
    include './../conexion.php';

    $sql = ("SELECT voto FROM sesion WHERE id = '$userId'");
    $user = mysqli_query($mysqli, $sql);
    $userArray = mysqli_fetch_assoc($user);

    $cant = $userArray['voto'];
    if ($cant > 0) {
        ?>
        
            <script>
                alert("Disculpe, ya usted ejerció su voto");
                window.location="./../index2.php";
            </script>
      
        <?php 
    }else{
        $candidato = "SELECT votes FROM candidatos WHERE id = '$id'";
        $resultado = mysqli_query($mysqli, $candidato);
        $votosArray = mysqli_fetch_assoc($resultado);
        $votosValue = $votosArray['votes'];
        // echo $votosValue;
        $newVotos = $votosValue + 1;
        // echo $newVotos;
        $updateCandVotes = "UPDATE candidatos SET votes = '$newVotos' WHERE id = '$id'";
        mysqli_query($mysqli, $updateCandVotes);

        $updateUserVotes = "UPDATE sesion SET voto = 1 WHERE  id = '$userId'";
        mysqli_query($mysqli, $updateUserVotes);
?>

<script>
     alert("Gracias por votar...!");
     window.location="./../index2.php";
</script>   

<?php      
    }
?>