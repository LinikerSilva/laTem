<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Cadastro de Usuário - Lá Tem</title>
    <link rel='icon' type='image/x-icon' href='../img/la-tem-favicon.png'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet'>
    <link rel='stylesheet' href='../css/bulma.min.css' />
    <link rel='stylesheet' href='../css/css.css' />
    <link rel='stylesheet' type='text/css' href='../css/login.css'>


    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js' integrity='sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link rel='stylesheet' href='../loggedUser.css'>
    <script type='text/javascript' src='js/jquery-3.6.0.min.js'></script>
    <script type='text/javascript' src='js/jquery.mask.js'></script>

</head>

<body>
<script src='search/submitSearch.js' rel='script'></script>
<section class='hero is-success is-fullheight'>
    <div class='div'>
        <a class='nav-link active' href='index.php'>
            <img src='../img/hand.png' alt='' width='60' height='48'>
            <img src='../img/name 1.png' alt='' width='60' height='48'>
        </a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <form action='search/userSearch.php' class='search-bar' id='pesquisa'>
            <input type='text' placeholder='Pesquise por um produto...' name='q'><a onclick='sendSearch()' class='search_icon'><i class='fas fa-search'></i></a>
        </form>
        <ul class='navbar-nav mb-2 ' >
            <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle bg-success text-white' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                    Minha Conta
                    </a>
                <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <li style='background-color: #0e6cc4; border-radius: 60px'><a class='dropdown-item' href='config/userConfigurations.php'>Configurações <img src='../img/engrenagem.png' style='height: 20px; width: 20px'></a></li>
                    <li>
                        <hr class='dropdown-divider'>
                    </li>
                    <li style='background-color: red; border-radius: 60px'><a class='dropdown-item' href='index.php'>Sair da Conta &nbsp; <img src='../img/exit.png' style='height: 20px; width: 20px'></a></li>
                </ul>
            </li>
        </ul>
        <ul></ul>
    </div>
    <div class='hero-body'>
        <div class='container has-text-centered' style='margin-bottom: 10vh;'>
            <div class='column is-4 is-offset-4'>
                <img src='../img/usuario.png' height='250' width='250'>
                <br><br><br><br>
                <div class='login-box'>
                    <div class='text-center' style='color: white;'>
                        <h1>Meus Dados</h1>
                    </div>
                    <br><br>
                    <form action='' method='post' name='userFormulary'>
                        <?php
                        include('../login/upload/conexao.php');

                        $userId = $_SESSION['id_usuario'];

                        $sql_code = "SELECT * from usuario WHERE id_usuario = $userId";
                        $sql_query = $mysqli->query($sql_code) or die("Erro ao consultar!  $sql_code - " . $mysqli->error);

                        while ($dados = $sql_query->fetch_assoc()) {
                            echo "<div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtName' value='" . $dados['nome'] . "' class='input is-large'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtSocialName' value='" . $dados['nome_social'] . "' class='input is-large'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtCpf' value='" . $dados['cpf'] . "' class='input is-large'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='email' name='txtEmail' value='" . $dados['email'] . "' class='input is-large'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtCep' value='" . $dados['cep'] . "' maxlength='' class='input is-large' onkeypress='$(this).mask('00000-000')'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtRua' value='" . $dados['rua'] . "' class='input is-large'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtBairro' value='" . $dados['bairro'] . "' class='input is-large'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtNumber' value='" . $dados['numero'] . "' class='input is-large' maxlength='4' onkeypress='$(this).mask(' . '#' . ')'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtCity' value='" . $dados['cidade'] . "' class='input is-large'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtUf' value='" . $dados['uf'] . "' class='input is-large' onkeypress='$(this).mask('SS')'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtCountry' value='" . $dados['pais'] . "' class='input is-large'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='tel' name='txtPhone' value='" . $dados['telefone'] . "' class='input is-large' maxlength='9' onkeypress='$(this).mask('00000-0009')'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtDdd' value='" . $dados['ddd'] . "' class='input is-large' onkeypress='$(this).mask('(00)')'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='text' name='txtCountryCode' value='" . $dados['codigo_de_pais'] . "' class='input is-large' onkeypress='$(this).mask('+00')'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='password' name='txtPassword' value='" . $dados['senha'] . "' class='input is-large'>
                                    </div>
                                </div>
        
                                <div class='field user-box'>
                                    <div class='control'>
                                        <input type='password' name='txtPasswordConfirmation' value='" . $dados['nome_social'] . "' class='input is-large'>
                                    </div>
                            </div>";
                        }
                        ?>
                        <br>
                        <button onclick='usuarioVendeuAlma()' class='button botao is-block is-large is-fullwidth'>Atualizar</button>
                    </form>
                    <?php
                    if (isset($_GET['erro'])) {
                        echo '<h3>As senhas são diferentes.</h3>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

</body>

</html>