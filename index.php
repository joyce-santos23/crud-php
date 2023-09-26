<?php
require_once 'conexao.php';
require_once "includes/header.php";
?>
    <main>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="save.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="titulo" id="titulo" placeholder="Titulo" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="descricao" id="descricao" placeholder="Descrição" class="form-control"
                                      rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Salvar" class="btn btn-success btn-block" id="button">
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Data de criação</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM `tarefas`";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['title']?></td>
                            <td><?php echo $row['description']?></td>
                            <td><?php echo $row['created_at']?></td>
                            <td>
                                <a href="edit.php?id=<?=$row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>


<?php
require_once "includes/footer.php";
?>