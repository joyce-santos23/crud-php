<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "tarefas";
    //$mysqli = new mysqli($servidor, $usuario, $senha, $bd);
    $conn = mysqli_connect($servidor, $usuario, $senha, $bd);
//if ($mysqli -> connect_errno) {
//    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//    exit();
//}

?>