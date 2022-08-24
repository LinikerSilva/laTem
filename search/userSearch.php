
<?php
include('../login/upload/conexao.php');

if (!isset($_GET['q'])) {
    echo "Escreva algo para pesquisar...";
} else {
    $produtoBuscado = $mysqli->real_escape_string($_GET['q']);

    $sql_code = "SELECT P.nome AS nomeproduto, P.categoria, P.imagem_path, E.nome, E.rua, E.bairro, E.numero FROM produto P INNER JOIN empresa E ON P.empresa_fk = E.id_empresa WHERE P.nome LIKE '%$produtoBuscado%'";
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
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
            <link rel="icon" type="image/x-icon" href="../img/la-tem-favicon.png">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
            <link rel="stylesheet" href="../loggedUser.css">

            <link rel="stylesheet" href="userSearch.css">

            
        </head>
        <body>
        <nav class="navbar navbar-expand-lg" style="background-color: #23108d !important;">
        <div class="container-fluid">
            <a class="nav-link active" href="../usuarioLogado.php">
                <img src="../img/hand.png" alt="" width="60" height="48">
                <img src="../img/name 1.png" alt="" width="60" height="48">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <form action="../search/userSearch.php" class="search-bar" id="pesquisa">
            <input type="text" placeholder="Pesquise por um produto..." name="q"><a onclick="sendSearch()" class="search_icon"><i class="fas fa-search"></i></a>
        </form>
        <ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 " >
                             <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle bg-success text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                     ' . 'Minha Conta' .
             '</a>
                                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                     <li style="border-radius: 60px"><a class="dropdown-item" href="/config/userConfigurations.php">Configurações <img src="img/engrenagem.png" style="height: 20px; width: 20px"></a></li>
                                     <li>
                                         <hr class="dropdown-divider">
                                     </li>
                                     <li style="border-radius: 60px"><a class="dropdown-item" href="index.php">Sair da Conta &nbsp; <img src="img/exit.png" style="height: 20px; width: 20px"></a></li>
                                 </ul>
                             </li>
                             <ul></ul><ul></ul>
            </ul>
        </div>
        </nav>
        <br>
        
            <table border="1" cellpadding="10" class="tabela" >
            <tbody>
            <tr>
                <th style="padding: 20px 110px !important;">Nome</th>
                <th style="padding: 20px 110px !important;">Categoria</th>
                <th style="padding: 20px 110px !important;">Imagem</th>
                <th style="padding: 20px 110px !important;">Empresa</th>
                <th style="padding: 20px 110px !important;">Endereço</th>
            </tr>';
        while ($dados = $sql_query->fetch_assoc()) {
            echo '<tr>
                            <td style="padding: 20px 110px !important;">' . utf8_encode(utf8_decode($dados['nomeproduto'])) . '</td>
                            <td style="padding: 20px 110px !important;">' . utf8_encode(utf8_decode($dados['categoria'])) . '</td>
                            <td style="padding: 20px 110px !important;"><img height="50" src="../login/upload/' . utf8_encode(utf8_decode($dados['imagem_path'])) . '"></td>
                            <td style="padding: 20px 110px !important;">' . utf8_encode(utf8_decode($dados['nome'])) . '</td>
                            <td style="padding: 20px 110px !important;">' . utf8_encode(utf8_decode($dados['rua'])) . ', <br>' . utf8_encode(utf8_decode($dados['bairro'])) . ', <br>' . utf8_encode(utf8_decode($dados['numero'])) . '</td>
                          </tr>';
        }
        echo '</tbody>
        </table>
        </body>
        </html>';
    }
}


