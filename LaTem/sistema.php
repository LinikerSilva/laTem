<?php
    session_start();

    if ($_SESSION['token'] != 'validToken') {
      header("Location: index.php");
    }
        $name = $_SESSION['nome'];
        echo "<html>";
        echo "<h1>Página do Servidor</h1>";
        echo "<hr />";
        echo "<h3>Você está conectado como: $name</h3>";
?>