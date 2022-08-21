<?php
    session_start();

    $enterpriseCnpj = $_POST['txtCnpj'];
    $enterprisePassword = $_POST['txtSenha'];

    $databaseInstance1 = mysqli_connect('localhost', 'root',
        '', 'la_tem');
    
    $retorno = $databaseInstance1 -> query("select nome, cnpj, senha from empresa where cnpj = '$enterpriseCnpj' and senha = '$enterprisePassword'");

    if ( mysqli_num_rows($retorno) > 0 ){
        while ($registro = $retorno -> fetch_assoc()) {
            $_SESSION['token'] = 'validToken';
            $_SESSION['nome'] = $registro['nome'];
            header("Location: empresaLogada.php");
          }
    } else {
        //Coloque aqui para fazer o que for necessário;
        header("Location: loginEmpresa.php?erro=0");
    }




?>