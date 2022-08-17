<?php
$password = $_POST['txtPassword'];
$passwordConfirmation = $_POST['txtPasswordConfirmation'];
$userName = $_POST['txtName'];
$userSocialName = $_POST['txtSocialName'];
$userCpf = $_POST['txtCpf'];
$userEmail = $_POST['txtEmail'];
$userCep = $_POST['txtCep'];
$userRoad = $_POST['txtRua'];
$userDistrict = $_POST['txtDistrict'];
$userNumber = $_POST['txtNumber'];
$userCity = $_POST['txtCity'];
$userUf = $_POST['txtUf'];
$userCountry = $_POST['txtCountry'];
$userPhone = $_POST['txtPhone'];
$userDdd = $_POST['txtDdd'];
$userCountryCode = $_POST['txtCountryCode'];
$avatarForeignKey = 1;

    if ($password != $passwordConfirmation) {
        header("Location: userRegistry.php?erro=0");
    } else {
        $connection = new mysqli('localhost', 'admin',
            '@Luno123', 'la_tem');

        $sql = "insert into usuario (nome, nome_social, senha,
                     cpf, email, avatar_fk, rua,
                     bairro, numero, cep, cidade,
                     uf, pais, telefone, ddd, codigo_de_pais)
values ('$userName', '$userSocialName', '$password',
        '$userCpf', '$userEmail', $avatarForeignKey,
        '$userRoad', '$userDistrict', $userNumber,
        '$userCep', '$userCity', '$userUf',
        '$userCountry', $userPhone, '$userDdd',
        '$userCountryCode')";

        $return = $connection->query($sql);
        if ($return > 0) {
            header("Location: userAvatarSelection.php");
        } else {
            echo $sql;
            echo "Houve um erro na inserção no banco!";
        }

        selectMaxUserId();

        $connection->Close();
    }

function selectMaxUserId() {

    $connection = new mysqli('localhost', 'admin',
        '@Luno123', 'la_tem');

    $return = $connection -> query("select max(id_usuario) from usuario;");

    while ($register = $return -> fetch_assoc()) {
        $GLOBALS['userId'] = $register['id_usuario'];
    }

    $connection->Close();
}

?>