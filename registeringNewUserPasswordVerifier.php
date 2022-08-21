<?php
$password = $_POST['txtPassword'];
$passwordConfirmation = $_POST['txtPasswordConfirmation'];

if ($password != $passwordConfirmation) {
    header("Location: userRegistry.php?erro=0");
} else {
    insertNewUser($password);
}

function insertNewUser($enterprisePassword) {
    $txtName = $_POST['txtName'];
    $txtSocialName = $_POST['txtSocialName'];
    $txtCpf = $_POST['txtCpf'];
    $txtEmail = $_POST['txtEmail'];
    $txtCep = $_POST['txtCep'];
    $txtRua = $_POST['txtRua'];
    $txtBairro = $_POST['txtBairro'];
    $txtNumber = $_POST['txtNumber'];
    $txtCity = $_POST['txtCity'];
    $txtUf = $_POST['txtUf'];
    $txtCountry = $_POST['txtCountry'];
    $txtPhone = $_POST['txtPhone'];
    $txtDdd = $_POST['txtDdd'];
    $txtCountryCode = $_POST['txtCountryCode'];

    $connection = new mysqli('localhost', 'root',
        '', 'la_tem');

    $sql = "insert into usuario (nome, nome_social, senha, cpf,
                    email, rua, bairro, numero, cep, cidade, uf, pais, telefone,
                    ddd, codigo_de_pais)
            values ('$txtName', '$txtSocialName', '$enterprisePassword', '$txtCpf',
            '$txtEmail', '$txtCep', '$txtRua',
            '$txtBairro', '$txtNumber', '$txtCity',
            '$txtUf', '$txtCountry', $txtPhone,
            '$txtDdd', '$txtCountryCode')";

    $return = $connection->query($sql);
    if ($return > 0) {
        header("Location: successfullyRegisteredNewUser.php");
    } else {
        echo "Houve um erro na inserção no banco!";
    }

    $connection->Close();
}
?>