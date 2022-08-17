<html>
<script src="utils/verificadorDeVendaDeAlmaDeEmpresa.js" rel="script"></script>
    <h1>Registro de Empresa</h1>
    <form action="utils/enterprisePasswordVerifier.php" method="post" name="enterpriseFormulary">
        <p>
            <input type="text" name="txtRazaoSocial" placeholder="Razão Social">
        </p>
        <p>
            <input type="email" name="txtEnterpriseEmail" placeholder="Email">
        </p>
        <p>
            <input type="text" name="txtRamoDeAtuacao" placeholder="Ramo de Atuação">
        </p>
        <p>
            <input type="text" name="txtCnpj" placeholder="CNPJ">
        </p>
        <p>
            <input type="text" name="txtEnterpriseCep" placeholder="CEP">
        </p>
        <p>
            <input type="text" name="txtEnterpriseRua" placeholder="Rua">
        </p>
        <p>
            <input type="text" name="txtEnterpriseBairro" placeholder="Bairro">
        </p>
        <p>
            <input type="text" name="txtEnterpriseNumber" placeholder="Número">
        </p>
        <p>
            <input type="text" name="txtEnterpriseCity" placeholder="Cidade">
        </p>
        <p>
            <input type="text" name="txtEnterpriseUf" placeholder="UF">
        </p>
        <p>
            <input type="text" name="txtEnterpriseCountry" placeholder="País">
        </p>
        <p>
            <input type="tel" name="txtEnterprisePhone" placeholder="Telefone">
        </p>
        <p>
            <input type="text" name="txtEnterpriseDdd" placeholder="DDD">
        </p>
        <p>
            <input type="text" name="txtEnterpriseCountryCode" placeholder="Código de País">
        </p>
        <p>
            <input type="password" name="txtEnterprisePassword" placeholder="Senha">
        </p>
        <p>
            <input type="password" name="txtEnterprisePasswordConfirmation" placeholder="Confirme a Senha">
        </p>
        <p>
            <input type="checkbox" name="vendaDeAlmaDeEmpresa"><label>Ao criar uma conta, você concorda com os Termos de Uso e Política de Privacidade do Lá Tem.</label>
        </p>
        <p>
            <button onclick="empresaVendeuAlma()">Enviar</button>
        </p>
    </form>
</html>

<?php
if (isset($_POST['erro'])) {
    echo '<h3>As senhas são diferentes.</h3>';
}
?>