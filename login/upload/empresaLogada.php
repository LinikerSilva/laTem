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
</head>
<body>
<form method="post" enctype="multipart/form-data" action="productInsert.php">
    <h1>Logado como a empresa: ' . $name . '</h1>
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
    <p><label for="">Selecione uma imagem para este produto (apenas JPG ou PNG):</label>
        <br>
        <input name="arquivo" type="file"></p>
    <button name="upload" type="submit">Enviar arquivo</button>
</form>
</body>
</html>';


