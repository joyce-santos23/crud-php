<?php

require_once 'conexao.php';

$title = $_POST['titulo'];
$descricao = $_POST['descricao'];

$sqlInsert = "INSERT INTO `tarefas`(`id`, `title`, `description`) VALUES (null,'$title','$descricao')";

$result = mysqli_query($conn, $sqlInsert);

if (!$result) {
    echo 'Query falhou!';
}

header('Location: index.php');

?>
