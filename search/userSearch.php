<?php
include('../login/upload/conexao.php');

if (!isset($_GET['q'])) {
    echo "Escreva algo para pesquisar...";
} else {
    $produtoBuscado = $mysqli->real_escape_string($_GET['q']);

    $sql_code = "SELECT P.nome AS nomeproduto, P.categoria, P.imagem_path, E.nome, E.rua, E.bairro, E.numero FROM produto P INNER JOIN empresa E ON p.empresa_fk = E.id_empresa WHERE P.nome LIKE '%$produtoBuscado%'";
    $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar! " . $mysqli->error);

    if ($sql_query->num_rows == 0) {
        echo "Nenhum resultado encontrado...";
    } else {
        echo '<!doctype html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Lá Tem - Você Pesquisou Por: ' . $produtoBuscado . '</title>
            <link rel="icon" type="image/x-icon" href="../img/la-tem-favicon.png">
        </head>
        <body>
            <table border="1" cellpadding="10">
            <tr>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Imagem</th>
                <th>Empresa</th>
                <th>Endereço</th>
            </tr>';
        while ($dados = $sql_query->fetch_assoc()) {
            echo '<tr>
                            <td>' . utf8_encode(utf8_decode($dados['nomeproduto'])) . '</td>
                            <td>' . utf8_encode(utf8_decode($dados['categoria'])) . '</td>
                            <td><img height="50" src="../login/upload/' . utf8_encode(utf8_decode($dados['imagem_path'])) . '"></td>
                            <td>' . utf8_encode(utf8_decode($dados['nome'])) . '</td>
                            <td>' . utf8_encode(utf8_decode($dados['rua'])) . ', <br>' . utf8_encode(utf8_decode($dados['bairro'])) . ', <br>' . utf8_encode(utf8_decode($dados['numero'])) . '</td>
                          </tr>';
        }
        echo '</table>
        </body>
        </html>';
    }
}


