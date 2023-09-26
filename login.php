<?php
require_once 'conexao.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "SELECT * FROM `user` WHERE= `id`='$id'";
    $result = mysqli_query($conn, $query);
    $userData = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto mt-5">
                <div class="card card-body">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="email@email.com"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pwd" id="pwd" placeholder="Senha123" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" value="Login" class="btn btn-info btn-block" id="button">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
