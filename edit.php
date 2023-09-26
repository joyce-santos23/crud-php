<?php
require_once 'conexao.php';
require_once "includes/header.php";

?>

<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM `tarefas` WHERE= `id`='$id'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
    $title = $row['title'];
    $description = $row['description'];
}

if(isset($_POST['update'])){
    $id = $_GET['id'];//via get url
    $title = $_POST['titulo']; //valor alterado pelo usuario
    $descricao = $_POST['descricao']; // valor alterado pelo usuario
    $sqlUpdate = "UPDATE `tarefas` SET `title`='$title',`description`='$descricao' WHERE= `id`='$id'";
    $result = mysqli_query($conn, $sqlUpdate);

    header("Location: index.php");

}

?>

    <main>
    <div class ="container">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="id" id="id"  class="form-control" disabled placeholder="Código"
                                   value="<?=$id?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="titulo" id="titulo" placeholder="Titulo" class="form-control"
                                   value="<?=$title?>">
                        </div>
                        <div class="form-group">
                            <textarea name="descricao" id="descricao" placeholder="Descrição" class="form-control"
                                      rows="2"><?=$description?></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="update" value="update" class="btn btn-secondary btn-block">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


<?php
require_once "includes/footer.php";
?>