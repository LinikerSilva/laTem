<?php
session_start();
include("../login/upload/conexao.php");

$userId = $_SESSION['id_usuario'];
$newUserName = $_POST['txtName'];
$newUserSocialName = $_POST['txtSocialName'];
$newUserCpf = $_POST['txtCpf'];
$newUserEmail = $_POST['txtEmail'];
$newUserCep = $_POST['txtCep'];
$newUserRua = $_POST['txtRua'];
$newUserBairro = $_POST['txtBairro'];
$newUserNumber = $_POST['txtNumber'];
$newUserCity = $_POST['txtCity'];
$newUserUf = $_POST['txtUf'];
$newUserCountry = $_POST['txtCountry'];
$newUserPhone = $_POST['txtPhone'];
$newUserDdd = $_POST['txtDdd'];
$newUserCountryCode = $_POST['txtCountryCode'];
$newUserPassword = $_POST['txtPassword'];

$sql = "update usuario set nome = '$newUserName', nome_social = '$newUserSocialName',
                   senha = '$newUserPassword', cpf = '$newUserCpf', email = '$newUserEmail',
                        rua = '$newUserRua', bairro = '$newUserBairro', numero = '$newUserNumber', cep = '$newUserCep', 
                        cidade = '$newUserCity', uf = '$newUserUf', pais = '$newUserCountry', telefone = '$newUserPhone',
                        ddd = '$newUserDdd', codigo_de_pais = '$newUserCountryCode' where id_usuario = $userId";

$sql_query = $mysqli->query($sql) or die("Erro ao consultar!  $sql - " . $mysqli->error);

if ($sql_query > 0) {
    header("Location: userConfigurations.php");
} else {
    echo "Houve um erro na inserção no banco!";
}

$connection->Close();
?>
