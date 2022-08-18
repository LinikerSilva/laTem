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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered" style="margin-bottom: 10vh;">
                <div class="column is-4 is-offset-4">
                    <img src="img/logo.png" height="250" width="250">
                    <br><br><br><br>
                    <div class="login-box">
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
                                
                                 <input type="submit"  P style="background-color: #23108d !important; color: #fff !important" value="Cadastrar">
    
                                <hr>
                                </form>
                            ';?>
<?php
if (isset($_GET['erro'])) {
    echo '
    <div class="alert alert-danger d-flex align-items-center" !important;" role="alert">
    <img src="img/ponto-de-exclamacao.png" width="20" height="20" />
    <div style="margin-left: 1%">
    Usuário ou senha inválidos
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