<?php
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "clientes";



    $conexao = new mysqli($dbHost,$dbUsername   ,$dbPassword,$dbName);
     
    if ($mysqli->connect_error) {
        echo "falha ao conectar: (" . $mysqli->connect_errno .")". $mysqli->connect_error; 
    }

    
?>