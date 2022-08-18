<?php

echo '<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body class="backColor">
    <div class="backColor">
  <div class="text-center" style="margin-top: 50px;">
      <img src="img/office.png" class="rounded" width="200" height="200" alt="...">
  </div>
  <br>
  <div class="Titulo" color="white">
    <h1>Pessoa jurídica</h1>
  </div>
  <form class="form-cadastro" action="enterprisePasswordVerifier.php">
    <div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="InputRepCom" placeholder="Representante comercial">
            <label for="InputRepCom">Representante comercial</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="InputRazao" placeholder="Razão social">
            <label for="InputRazao">Razão social</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="InputEmail" placeholder="name@example.com">
            <label for="InputEmail">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="InputCNPJ" placeholder="CNPJ">
            <label for="InputCNPJ">CNPJ</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="InputNumero" placeholder="(00)00000-0000)">
            <label for="InputNumero">Numero de celular</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="InputEndereco" placeholder="Password">
            <label for="InputEndereco">Endereço</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="InputComple" placeholder="name@example.com">
            <label for="InputComple">Complemento</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="InputCEP" placeholder="Password">
            <label for="InputCEP">CEP</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="InputCidade" placeholder="name@example.com" >
            <label for="InputCidade">Cidade</label>
        </div>
        <div class="form-floating mb-3">
            <input type="Password" name="txtPassword" class="form-control" placeholder="Password">
            <label for="txtPassword">Senha</label>
        </div>
        <div class="form-floating mb-3">
            <input type="Password" name="txtPasswordConfirmation" class="form-control"  placeholder="Password">
            <label for="txtPasswordConfirmation">Repita a senha</label>
        </div>
        </div> 
        <div class="col-auto">
        <Input type="submit" class="botao"></button>
      </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>
</body>
</html>';
if (isset($_GET['erro'])) {
    echo '<div class="Alert"> 
            <h3>As senhas são diferentes.</h3>
          </div>';
}
?>