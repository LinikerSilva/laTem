<?php

echo '<html>
    <form action="verificaLogin.php">
        <p>
            <label>Usuário</label>
            <input type="text" name="txtUser">
        </p>
        <p>
            <label>Senha</label>
            <input type="text" name="txtSenha">
        </p>
        <p>
            <input type="submit" value="Entrar">
        </p>
    </form>
</html>';
if (isset($_GET['erro'])) {
    echo '<h3>Usuário ou senha inválidos.</h3>';
}
?>