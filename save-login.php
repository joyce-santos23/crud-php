<?php

require_once 'conexao.php';

$email = $_POST['email'];
$pwd = $_POST['password'];
$hash = password_hash($pwd, PASSWORD_ARGON2I);

$sqlInsert = "INSERT INTO `user`(`email`, `password`) VALUES ('$email','$hash')";

$result = mysqli_query($conn, $sqlInsert);

if (!$result) {
    echo 'Query falhou!';
}

header('Location: login.php');

?>
