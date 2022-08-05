<?php
    session_start();

    if ($_SESSION['token'] != 'validToken') {
      header("Location: login.php");
    }
        $user = $_SESSION['user'];
        echo "<html>";
        echo "<h1>Página do Servidor</h1>";
        echo "<hr />";
        echo "<h3>Você está conectado como: $user</h3>";
?>