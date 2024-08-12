<?php
    $hostname = "localhost";
    $bancodedados = "clientes";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $bancodedados, $senha, $usuario);
    if ($mysqli->connect_error) {
        echo "falha ao conectar: (" . $mysqli->connect_errno .")". $mysqli->connect_error;
    }

?>