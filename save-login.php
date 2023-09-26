<?php

require_once 'conexao.php';

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$hash = password_hash($pwd, PASSWORD_ARGON2I);

$sqlInsert = "INSERT INTO `user`(`id`, `email`, `pwd`) VALUES (null,'$email','$hash')";

$result = mysqli_query($conn, $sqlInsert);

if (!$result) {
    echo 'Query falhou!';
}

header('Location: login.php');

?>
