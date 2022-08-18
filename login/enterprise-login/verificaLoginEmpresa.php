<?php
    session_start();

    $enterpriseEmail = $_GET['txtEmail'];
    $enterprisePassword = $_GET['txtSenha'];

    $databaseInstance1 = mysqli_connect('localhost', 'root',
        '123456', 'la_tem');
    
    $retorno = $databaseInstance1 -> query("select email, senha from empresa where email = '$enterpriseEmail' and senha = '$enterprisePassword'");

    if ( mysqli_num_rows($retorno) > 0 ){
        while ($registro = $retorno -> fetch_assoc()) {
            $_SESSION['token'] = 'validToken';
            $_SESSION['nome'] = $registro['nome'];
            header("Location: sistemaEmpresa.php");
          }
    } else {
        //Coloque aqui para fazer o que for necessário;
        header("Location: loginEmpresa.php?erro=0");
    }




?>