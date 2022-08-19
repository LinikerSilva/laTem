<?php
echo '<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mercado</h1>';
$databaseInstance1 = mysqli_connect('localhost', 'admin',
    '@Luno123', 'la_tem');

$retorno = $databaseInstance1 -> query("select nome from empresa where ramo_atuacao = 'Mercado'");

if ( mysqli_num_rows($retorno) > 0 ) {
    while ($registro = $retorno->fetch_assoc()) {
        echo $registro['nome'];
    }
}

echo '</body>
</html>';
