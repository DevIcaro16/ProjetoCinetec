<?php
session_start();
if((!isset($_SESSION['email_usuario']) == true ) and (!isset($_SESSION['senha_usuario']) == true )){

    unset($_SESSION['email_usuario']);
    unset($_SESSION['senha_usuario']);
    header('Location : login.html');

}

    include_once("../conexao/conexao.php");

    $logado = $_SESSION['nome_adm'] ;
    $email = $_SESSION['email_adm'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema: </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style>

        #h1{
            color: green;
        }

    </style>

<nav class="navbar fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">CineTec</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Usuário: <?= $logado?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Email: <?= $email?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    </div>
                </div>
            </nav>
    <h1 id="h1" > Bem Vindo Administrador <?=  $logado ; ?> ! </h1>
    <h2>Visualize os Usuários Cadastrados : </h2>

    <?php foreach($rows_all_usuario as $row_all_usuario):  ?>

    
    
    <div class="table-usuarios">

        <ol>

            <ul scope="row"><h3>Nome : <?= $row_all_usuario["nome_usuario"] ?> </h3></ul>
            <ul scope="row"><h3>Email : <?= $row_all_usuario["email_usuario"] ?></h3></ul>
            <ul scope="row"><h3>Telefone: <?= $row_all_usuario["telefone_usuario"] ?> </h3></ul>
            <ul scope="row"><h3>CPF : <?= $row_all_usuario["cpf_usuario"] ?></h3></ul>
            <ul scope="row"><h3>Senha Cadastrada : <?= $row_all_usuario["senha_usuario"] ?></h3></ul>
      
            <hr>

        </ol>
    
    <?php endforeach ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>


