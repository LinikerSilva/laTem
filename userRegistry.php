<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário - Lá Tem</title>
    <link rel="icon" type="image/x-icon" href="img/la-tem-favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
    <script src="cadastro/enterprise-registry/utils/verificadorDeVendaDeAlmaDeEmpresa.js" rel="script"></script>
    <section class="hero is-success is-fullheight">
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">
                            <img src="img/hand.png" alt="" width="60" height="48">
                            <img src="img/name 1.png" alt="" width="60" height="48">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Login Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="login/enterprise-login/loginEmpresa.php">Login Empresarial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="userRegistry.php">Cadastrode Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="cadastro/enterprise-registry/enterpriseRegistry.php">Cadastro Empresarial
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="hero-body">
            <div class="container has-text-centered" style="margin-bottom: 10vh;">
                <div class="column is-4 is-offset-4">
                    <img src="img/usuario.png" height="250" width="250">
                    <br><br><br><br>
                    <div class="login-box">
                        <div class="text-center" style="color: white;">
                            <h1>Cadastro de Usuário</h1>
                        </div>
                        <br><br>
                        <?php
                        echo '
    <form action="userPasswordVerifier.php">
        <div class="field user-box">
            <div class="control">
                <input type="text" name="txtName" placeholder="Nome" class="input is-large">
            </div>
        </div>

        <div class="field user-box">
            <div class="control">
                <input type="text" name="txtSocialName" placeholder="Nome Social" class="input is-large">
            </div>
        </div>

        <div class="field user-box">
            <div class="control">
                <input type="text" name="txtCpf" placeholder="CPF" class="input is-large">
            </div>
        </div>

        <div class="field user-box">
            <div class="control">
                <input type="email" name="txtEmail" placeholder="Email" class="input is-large">
            </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="text" name="txtCep" placeholder="CEP" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="text" name="txtRua" placeholder="Rua" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="text" name="txtBairro" placeholder="Bairro" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="text" name="txtNumber" placeholder="Número" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="text" name="txtCity" placeholder="Cidade" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="text" name="txtUf" placeholder="UF" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="text" name="txtCountry" placeholder="País" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="tel" name="txtPhone" placeholder="Telefone" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="text" name="txtDdd" placeholder="DDD" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="text" name="txtCountryCode" placeholder="Código de País" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="password" name="txtPassword" placeholder="Senha" class="input is-large">
        </div>
        </div>

        <div class="field user-box">
        <div class="control">
            <input type="password" name="txtPasswordConfirmation" placeholder="Confirme a Senha" class="input is-large">
        </div>
        </div>

        <br>

        <div class="field user-box">
        <div class="control ">
            <label  style="color: white;" class="text-center">
                <input type="checkbox" name="vendaDeAlma" class="text-start" style="float: left !important; margin-top: 4px;">
                Ao criar uma conta, você concorda com os Termos de Uso e Política de Privacidade do Lá Tem.
            </label>
        </div>
        </div>

        <br>

            <input type="submit" class="button botao is-block is-large is-fullwidth" value="Enviar">
    </form>';

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