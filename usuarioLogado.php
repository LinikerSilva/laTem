<?php
session_start();
$userName = $_SESSION['nome'];
echo '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lá Tem - Home</title>
    <link rel="icon" type="image/x-icon" href="img/la-tem-favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="loggedUser.css">
</head>
<body>
    <div class="div">
            <a class="nav-link active" href="index.php">
                    <img src="img/hand.png" alt="" width="60" height="48">
                    <img src="img/name 1.png" alt="" width="60" height="48">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <form action="" class="search-bar">
            <input type="text" placeholder="Pesquise por um produto..." name="q"><a href="" class="search_icon"><i class="fas fa-search"></i></a>
        </form>
        <ul class="navbar-nav mb-2 " >
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle bg-success text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ' . 'Minha Conta' .
    '</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li style="background-color: #0e6cc4; border-radius: 60px"><a class="dropdown-item" href="index.php">Configurações <img src="img/engrenagem.png" style="height: 20px; width: 20px"></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li style="background-color: red; border-radius: 60px"><a class="dropdown-item" href="index.php">Sair da Conta &nbsp; <img src="img/exit.png" style="height: 20px; width: 20px"></a></li>
                        </ul>
                    </li>
                </ul>
                <ul></ul>
    </div>
    <div class="categories">
        <h1>Categorias</h1>
    </div>
    <div class="cards-container">
        <a href="categorias/mercado.php"><div class="cards">
        <br><br>
            <div class="img">
                <img src=categorias/img/cart1.png style="height: 60px; width: 60px">
            </div>
            <h1>Mercado</h1>
        </div></a>
        
        <a href="categorias/petshop.php"><div class="cards">
        <br><br>
            <div class="img">
                <img src=categorias/img/dogue-alemao.png style="height: 60px; width: 60px">
            </div>
            <h1>PetShop</h1>
        </div></a>
        
        <a href="categorias/brinquedos.php"><div class="cards">
        <br><br>
            <div class="img">
                <img src=categorias/img/toys1.png style="height: 60px; width: 60px">
            </div>
            <h1>Brinquedos</h1>
        </div></a>
        
        <a href="categorias/produtosAutomotivos.php"><div class="cards">
        <br><br>
            <div class="img">
                <img src=categorias/img/reparo-de-carro.png style="height: 60px; width: 60px">
            </div>
            <h1>Produtos Automotivos</h1>
        </div></a>
        
        <a href="categorias/farmacia.php"><div class="cards">
        <br><br>
            <div class="img">
                <img src=categorias/img/medicines1.png style="height: 60px; width: 60px">
            </div>
            <h1>Farmácia</h1>
        </div></a>
        
        <a href="categorias/padaria.php"><div class="cards">
        <br><br>
            <div>
                <img src=categorias/img/padaria1.png style="height: 60px; width: 60px">
            </div>
            <h1>Padaria</h1>
        </div></a>
        
        <a href="categorias/postoDeCombustivel.php"><div class="cards">
        <br><br>
            <div>
                <img src=categorias/img/bomba-de-combustivel.png style="height: 60px; width: 60px">
            </div>
            <h1>Posto de Combustível</h1>
        </div></a>
        
        <a href="categorias/otica.php"><div class="cards">
        <br><br>
            <div class="img">
                <img src=categorias/img/sun-glasses1.png>
            </div>  
            <h1>Ótica</h1>
        </div></a>
    </div>
</body>
</html>';
?>

