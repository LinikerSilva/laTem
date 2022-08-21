<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro Empresarial - Lá Tem</title>
    <link rel="icon" type="image/x-icon" href="../../img/la-tem-favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.mask.js"></script>
</head>

<body>
<script src="utils/verificadorDeVendaDeAlmaDeEmpresa.js" rel="script"></script>
    
    <section class="hero is-success is-fullheight">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="nav-link active" href="index.php">
                    <img src="../../img/hand.png" alt="" width="60" height="48">
                    <img src="../../img/name 1.png" alt="" width="60" height="48">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 " style="margin-left: 50%;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../index.php">Login Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../../login/enterprise-login/loginEmpresa.php">Login Empresarial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="../../userRegistry.php">Cadastro de Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="enterpriseRegistry.php">Cadastro Empresarial</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
        <div class="hero-body">
            <div class="container has-text-centered" style="margin-bottom: 10vh;">
                <div class="column is-4 is-offset-4">
                    <img src="../../img/office.png" height="250" width="250">
                    <br><br><br><br>
                    <div class="login-box">
                        <div class="text-center" style="color: white;">
                            <h1>Cadastro de Empresa</h1>
                        </div>

    <br><br>
    <form action="utils/registeringNewEnterprisePasswordVerifier.php" method="post" name="enterpriseFormulary">

        <div class="field user-box">
            <div class="control">
                <input type="text" name="txtEnterpriseName" placeholder="Nome" class="input is-large">
            </div>
        </div>

        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtRazaoSocial" placeholder="Razão Social" class="input is-large">
            </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="email" name="txtEnterpriseEmail" placeholder="Email" class="input is-large">
            </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtRamoDeAtuacao" placeholder="Ramo de Atuação" class="input is-large">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtCnpj" placeholder="CNPJ" class="input is-large" onkeypress="$(this).mask('00.000.000/0000-00')">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtEnterpriseCep" placeholder="CEP" class="input is-large" onkeypress="$(this).mask('00000-000')">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtEnterpriseRua" placeholder="Rua" class="input is-large">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtEnterpriseBairro" placeholder="Bairro" class="input is-large">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtEnterpriseNumber" placeholder="Número" class="input is-large" maxlength="4" onkeypress="$(this).mask('#')">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtEnterpriseCity" placeholder="Cidade" class="input is-large">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtEnterpriseUf" placeholder="UF" class="input is-large" onkeypress="$(this).mask('SS')">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtEnterpriseCountry" placeholder="País" class="input is-large">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="tel" name="txtEnterprisePhone" placeholder="Telefone" class="input is-large" maxlength="9" onkeypress="$(this).mask('00000-0009')">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtEnterpriseDdd" placeholder="DDD" class="input is-large" onkeypress="$(this).mask('(00)')">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="text" name="txtEnterpriseCountryCode" placeholder="Código de País" class="input is-large" onkeypress="$(this).mask('+00')">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="password" name="txtEnterprisePassword" placeholder="Senha" class="input is-large">
        </div>
        </div>
        
        <div class="field user-box">
            <div class="control">
            <input type="password" name="txtEnterprisePasswordConfirmation" placeholder="Confirme a Senha" class="input is-large">
        </div>
        </div>

        <br>
        
        <div class="field user-box">
        <div class="control ">
            <label  style="color: white;" class="text-center">
                <input type="checkbox" name="vendaDeAlmaDeEmpresa" class="text-start" style="float: left !important; margin-top: 4px;">
                Ao criar uma conta, você concorda com os Termos de Uso e Política de Privacidade do Lá Tem.
            </label
        </div>
        </div>

        <br>
        
        <button onclick="empresaVendeuAlma()" class="button botao is-block is-large is-fullwidth">Enviar</button>

    </form>

<?php
if (isset($_POST['erro'])) {
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