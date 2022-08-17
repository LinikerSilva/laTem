<?php
    session_start();

    $uname = $_GET['txtUser'];
    $pass = $_GET['txtSenha'];

    $databaseInstance = mysqli_connect('localhost', 'admin',
        '@Luno123', 'TI41');

    $return = $databaseInstance -> query("select usuario, senha from logins;");

    while ($register = $return -> fetch_assoc()) {
        if ($uname == $register['usuario'] && $pass == $register['senha']) {
            header("Location: sistema.php");
            $_SESSION['token'] = 'validToken';
        } else {
            header("Location: login.php?erro=0");
        }
      }
?>