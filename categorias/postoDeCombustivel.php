<?php
echo '<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lá Tem - Posto de Combustível</title>
    <link rel="icon" type="image/x-icon" href="../img/la-tem-favicon.png">
</head>
<body>
    <h1>Posto de Combustível</h1>
    <table border="1" cellpadding="10">
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Imagem</th>
                <th>Empresa</th>
                <th>Endereço</th>
            </tr>';
$databaseInstance1 = mysqli_connect('localhost', 'root',
    '', 'la_tem');

$retorno = $databaseInstance1 -> query("SELECT P.nome AS nomeproduto, P.categoria, P.imagem_path, E.nome, E.rua, E.bairro, E.numero FROM produto P INNER JOIN empresa E ON p.empresa_fk = E.id_empresa WHERE P.categoria = 'Combustivel'");

if ( mysqli_num_rows($retorno) > 0 ) {
    while ($registro = $retorno->fetch_assoc()) {
        echo '<tr>
                <td>' . utf8_encode(utf8_decode($registro['nomeproduto'])) . '</td>
                <td>' . utf8_encode(utf8_decode($registro['categoria'])) . '</td>
                <td><img height="50" src="../login/upload/' . utf8_encode(utf8_decode($registro['imagem_path'])) . '"></td>
                <td>' . utf8_encode(utf8_decode($registro['nome'])) . '</td>
                <td>' . utf8_encode(utf8_decode($registro['rua'])) . ', <br>' . utf8_encode(utf8_decode($registro['bairro'])) . ', <br>' . utf8_encode(utf8_decode($registro['numero'])) . '</td>
              </tr>';
    }
}

echo '</body>
</html>';
