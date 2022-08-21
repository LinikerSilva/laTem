<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Lá Tem</title>
    <link rel="icon" type="image/x-icon" href="img/la-tem-favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
    <section class="hero is-success is-fullheight">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="nav-link active" href="index.php">
                    <img src="img/hand.png" alt="" width="60" height="48">
                    <img src="img/name 1.png" alt="" width="60" height="48">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 " style="margin-left: 50%;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Login Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login/enterprise-login/loginEmpresa.php">Login Empresarial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="userRegistry.php">Cadastro de Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="cadastro/enterprise-registry/enterpriseRegistry.php">Cadastro Empresarial</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
        <div class="hero-body">
            <div class="container has-text-centered" style="margin-bottom: 10vh;">
                <div class="column is-4 is-offset-4">
                    <img src="img/logo.png" height="250" width="250">
                    <br><br><br><br>
                    <div class="login-box">
                        <div class="text-center" style="color: white;">
                            <h1>Login de Usuário</h1>
                        </div>
                        <br><br>
                        <?php
                            echo '
                                <form action="verificaLogin.php">
                                <div class="field user-box">
                                    <div class="control">
                                        <input placeholder="  Email" name="txtEmail" name="text" class="input is-large" autofocus="">
                                    </div>
                                </div>
    
                                <div class="field user-box">
                                    <div class="control">
                                        <input placeholder="  Senha" name="txtSenha" class="input is-large" type="password">
                                    </div>
                                </div>
                                
                                 <input type="submit"  class="button botao is-block is-large is-fullwidth" value="Entrar">

                                 <br>
                                </form>
                            ';?>
                        
                        <?php
                            echo '
                                <form action="userRegistry.php">
                                
                                 <input type="submit"  class="button botao is-block is-large is-fullwidth" style="background-color: #23108d !important; color: #fff !important" value="Cadastrar">
    
                                <hr>
                                </form>
                            ';?>
<?php
if (isset($_GET['erro'])) {
    echo '
    <div class="alert alert-danger d-flex align-items-center" !important;" role="alert">
    <img src="img/ponto-de-exclamacao.png" width="20" height="20" />
    <div style="margin-left: 1%">
    Usuário ou senha inválidos.
  </div>
</div>';
}
?>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>