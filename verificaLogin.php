<?php
    session_start();

    $userEmail = $_GET['txtEmail'];
    $userPassword = $_GET['txtSenha'];

    $databaseInstance1 = mysqli_connect('localhost', 'root',
        '123456', 'la_tem');
    
    $retorno = $databaseInstance1 -> query("select id_usuario, email, senha from usuario where email = '$userEmail' and senha = '$userPassword'");

    if (mysqli_num_rows($retorno) > 0 ){
        while ($registro = $retorno -> fetch_assoc()) {
            $_SESSION['token'] = 'validToken';
            $_SESSION['nome'] = $registro['nome'];
            $_SESSION['id_usuario'] = $registro['id_usuario'];
            header("Location: usuarioLogado.php");
          }
    } else {
        header("Location: index.php?erro=0");
    }


    
      
?>