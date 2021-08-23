<?php 

    require "conexion.php";

    if(isset($_GET['del_id'])){
    $id= $_GET['del_id'];
    
    $delete = $conexion->prepare("DELETE FROM tasks WHERE id=:id");
    $delete->execute([':id'=> $id]);

    header("location: index.php ");
    }
    

?>