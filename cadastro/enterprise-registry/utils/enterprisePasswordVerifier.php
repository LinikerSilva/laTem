<?php
$enterprisePassword = $_POST['txtEnterprisePassword'];
$enterprisePasswordConfirmation = $_POST['txtEnterprisePasswordConfirmation'];

if ($enterprisePassword != $enterprisePasswordConfirmation) {
    header("Location: enterpriseRegistry.php?erro=0");
} else {
    insertNewEnterprise($enterprisePassword);
}

function insertNewEnterprise($enterprisePassword) {
    $socialReason = $_POST['txtRazaoSocial'];
    $enterpriseEmail = $_POST['txtEnterpriseEmail'];
    $ramoDeAtuacao = $_POST['txtRamoDeAtuacao'];
    $cnpj = $_POST['txtCnpj'];
    $enterpriseCep = $_POST['txtEnterpriseCep'];
    $enterpriseRoad = $_POST['txtEnterpriseRua'];
    $enterpriseDistrict = $_POST['txtEnterpriseBairro'];
    $enterpriseNumber = $_POST['txtEnterpriseNumber'];
    $enterpriseCity = $_POST['txtEnterpriseCity'];
    $enterpriseUf = $_POST['txtEnterpriseUf'];
    $enterpriseCountry = $_POST['txtEnterpriseCountry'];
    $enterprisePhone = $_POST['txtEnterprisePhone'];
    $enterpriseDdd = $_POST['txtEnterpriseDdd'];
    $enterpriseCountryCode = $_POST['txtEnterpriseCountryCode'];

    $connection = new mysqli('localhost', 'admin',
        '@Luno123', 'la_tem');

    $sql = "insert into empresa (razao_social, senha, email, ramo_atuacao,
                    cnpj, rua, bairro, numero, cep, cidade, uf, pais, telefone,
                    ddd, codigo_de_pais)
            values ('$socialReason', '$enterprisePassword', '$enterpriseEmail',
            '$ramoDeAtuacao', '$cnpj', '$enterpriseRoad',
            '$enterpriseDistrict', '$enterpriseNumber', $enterpriseCep,
            '$enterpriseCity', '$enterpriseUf', '$enterpriseCountry',
            '$enterprisePhone', $enterpriseDdd, '$enterpriseCountryCode')";

    $return = $connection->query($sql);

    if ($return > 0) {
        header("Location: successfulEnterprisePage.php");
    } else {
        echo $sql;
        echo "Houve um erro na inserção no banco!";
    }

    $connection->Close();
}
?>