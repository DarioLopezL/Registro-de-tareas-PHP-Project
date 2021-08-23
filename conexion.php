<?php

try{
    $host = "localhost";
    $dbname ="todos";
    $user = "root";
    $password = "";

    $conexion = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){

    echo "error en:". $e->getMessage();
}
