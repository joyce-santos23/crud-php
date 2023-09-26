<?php

require_once 'conexao.php';

$id = $_GET['id'];
$sqlUpdate = "UPDATE `tarefas` SET `id`='[value-1]',`title`='[value-2]',`description`='[value-3]',
                     `created_at`='[value-4]' WHERE";
$result = mysqli_query($conn, $sqlUpdate);

header("Location: index.php");

?>
