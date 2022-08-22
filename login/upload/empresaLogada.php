<?php

include("conexao.php");

session_start();

if ($_SESSION['token'] != 'validToken') {
    header("Location: loginEmpresa.php");
}
$name = $_SESSION['nome'];

    echo '<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lá Tem - Home Empresarial</title>
    <link rel="icon" type="image/x-icon" href="../../img/la-tem-favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="../../css/bulma.min.css" />
    <link rel="stylesheet" href="../../css/css.css" />
    <link rel="stylesheet" type="../../text/css" href="css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>
<body>
<section class="hero is-success is-fullheight" style="background-color: #23108d !important;" >
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="nav-link active" href="../../index.php">
                <img src="../../img/hand.png" alt="" width="60" height="48">
                <img src="../../img/name 1.png" alt="" width="60" height="48">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 " >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bg-success text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login de:
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../../index.php">Usuário</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../../login/enterprise-login/loginEmpresa.php">Empresarial</a></li>
                    </ul>
                </li>
            </ul>
            <ul></ul>
            <ul class="navbar-nav mb-2 ">

                <li class="nav-item dropdown" style="margin-left: -10% !important;">
                    <a class="nav-link dropdown-toggle bg-white text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Criar Conta:
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../../userRegistry.php">Usuário</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="../../cadastro/enterprise-registry/enterpriseRegistry.php">Empresarial</a></li>

                    </ul>
                </li>
            </ul>
        </div>
</nav>
    <div class="hero-body">
        <div class="container has-text-centered" style="margin-bottom: 10vh;">
            <div class="column is-4 is-offset-4">
            <br><br><br><br>
            <div class="login-box">
<form method="post" enctype="multipart/form-data" action="productInsert.php">
    <h2>Seja Bem Vindo ' . $name . '</h2>
    <br><br>
    <h3>Cadastro de Produtos: </h3>
    <div class="field user-box">
        <div class="control">
            <input type="text" name="txtProductName" placeholder="Nome do Produto" class="input is-large">
        </div>
    </div>
    <div class="field user-box">
        <div class="control">
            <input type="text" name="txtProductCategory" placeholder="Categoria do Produto" class="input is-large">
        </div>
    </div>
    <p><label for="">Selecione uma imagem para este produto:</label>
        <br>
        <input name="arquivo" type="file"></p>
        <br>
    <button name="upload" class="button botao is-block is-large is-fullwidth" type="submit">Enviar arquivo</button>
</form>

</div>
</div>
</div>
</div>
</section>
</body>
</html>';


