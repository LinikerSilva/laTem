<?php

echo '<html>
    <h1>Registro de Usuário</h1>
    <form action="userPasswordVerifier.php">
        <p>
            <input type="text" name="txtName" placeholder="Nome">
        </p>
        <p>
            <input type="text" name="txtSocialName" placeholder="Nome Social">
        </p>
        <p>
            <input type="text" name="txtCpf" placeholder="CPF">
        </p>
        <p>
            <input type="email" name="txtEmail" placeholder="Email">
        </p>
        <p>
            <input type="text" name="txtCep" placeholder="CEP">
        </p>
        <p>
            <input type="text" name="txtRua" placeholder="Rua">
        </p>
        <p>
            <input type="text" name="txtBairro" placeholder="Bairro">
        </p>
        <p>
            <input type="text" name="txtNumber" placeholder="Número">
        </p>
        <p>
            <input type="text" name="txtCity" placeholder="Cidade">
        </p>
        <p>
            <input type="text" name="txtUf" placeholder="UF">
        </p>
        <p>
            <input type="text" name="txtCountry" placeholder="País">
        </p>
        <p>
            <input type="tel" name="txtPhone" placeholder="Telefone">
        </p>
        <p>
            <input type="text" name="txtDdd" placeholder="DDD">
        </p>
        <p>
            <input type="text" name="txtCountryCode" placeholder="Código de País">
        </p>
        <p>
            <input type="password" name="txtPassword" placeholder="Senha">
        </p>
        <p>
            <input type="password" name="txtPasswordConfirmation" placeholder="Confirme a Senha">
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</html>';
if (isset($_GET['erro'])) {
    echo '<h3>As senhas são diferentes.</h3>';
}
?>