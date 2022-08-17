<html>
<script src="utils/verificadorDeVendaDeAlma.js" rel="script"></script>
<h1>Registro de Usuário</h1>
<form action="utils/userPasswordVerifier.php" method="post" name="formulary">
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
        <input type="text" name="txtDistrict" placeholder="Bairro">
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
        <input type="checkbox" name="vendaDeAlma"><label>Ao criar uma conta, você concorda com os Termos de Uso e Política de Privacidade do Lá Tem.</label>
    </p>
    <p>
    <h1>Escolha um Avatar de Usuário</h1>
    </p>
    <p>
        <input type="radio" name="choosedAvatar" value=1><img src="../user-registry/user-avatars/homem(1).png" name="1">
    </p>
    <p>
        <input type="radio" name="choosedAvatar" value= 2><img src="../user-registry/user-avatars/homem.png" name="2">
    </p>
    <p>
        <input type="radio" name="choosedAvatar" value=3><img src="../user-registry/user-avatars/mulher.png" name="3">
    </p>
    <p>
        <input type="radio" name="choosedAvatar" value=4><img src="../user-registry/user-avatars/jogador.png" name="4">
    </p>
</form>
    <p>
        <button onclick="vendeuAlma()">Enviar</button>
    </p>
</html>

<?php
if (isset($_POST['erro'])) {
    echo '<h3>As senhas são diferentes.</h3>';
}
?>