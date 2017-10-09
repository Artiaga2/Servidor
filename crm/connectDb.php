<?php

try{
    $pdo = new PDO("mysql:hosts=$server;dbname=$database",$user, $pass);
}catch (PDOException $e){
    print_r($e ->getMessage());
    die("No se puede acceder a la base de datos");
}


?>