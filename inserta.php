<?php 


    require "conexion.php";

    if(isset($_POST['mytask'])) {
    $task = $_POST['mytask'];
    $insert = $conexion->prepare("INSERT INTO 
            tasks (name) VALUES (:name)");
    $insert->execute([':name' => $task ]);

    header("location: index.php");
} 

?>
