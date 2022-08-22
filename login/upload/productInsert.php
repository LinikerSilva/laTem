<?php
session_start();
include("conexao.php");
$name = $_SESSION['nome'];
$productName = $_POST['txtProductName'];
$productCategory = $_POST['txtProductCategory'];
$empresa_fk = $_SESSION['id_empresa'];

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error'])
        die("Falha ao enviar arquivo.");

    $pasta = "arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "png")
        die("Tipo de arquivo não aceito.");

    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
    if ($deu_certo) {
        $mysqli->query("insert into produto (nome, categoria, imagem_path, empresa_fk) values ('$productName', '$productCategory', '$path' , $empresa_fk)") or die($mysqli->error);
    }
}

$lastInsertedProductImageIdQuery = $mysqli->query("select max(id_produto) as 'maxid' from produto");
while ($register = $lastInsertedProductImageIdQuery->fetch_assoc()) {
    $id_produto_novo = $register['maxid'];
    $sql_query = $mysqli->query("SELECT nome, categoria, imagem_path FROM produto where id_produto = $id_produto_novo") or die($mysqli->error);

    echo '<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lá Tem - Home Empresarial</title>
        <link rel="icon" type="image/x-icon" href="img/la-tem-favicon.png">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/alreadyLogged.css" />
    </head>
    <body>
        <h1>Logado como a empresa: ' . $name . '</h1>
        <table border="1" cellpadding="10">';
            while ($arquivo = $sql_query->fetch_assoc()) {
                echo '<tr>
                        <th id="co1" headers="blank">Nome</th>
                        <th id="co2" headers="blank">Categoria</th>
                        <th id="co3" headers="blank">Imagem</th>
                      </tr>
                      <tr>
                        <td headers="co1">' . $arquivo['nome'] . '</td>
                        <td headers="co2">' . $arquivo['categoria'] . '</td>
                        <td headers="co3"><img height="50" src="' . $arquivo['imagem_path'] . '"></td>
                      </tr>
       </table>
       <h3>Produto cadastrado com sucesso!</h3>
    </body>
    </html>';
            }
}