<?php
$password = $_POST['txtPassword'];
$passwordConfirmation = $_POST['txtPasswordConfirmation'];
$avatarForeignKey = $_POST['choosedAvatar'];

if ($password != $passwordConfirmation) {
    header("Location: userRegistry.php?erro=0");
} else {
    $connection = new mysqli('localhost', 'admin',
        '@Luno123', 'la_tem');

    $sql = insertNewUser($password, $avatarForeignKey);
    $return = $connection->query($sql);

    if ($return > 0) {
        $return = $connection -> query("select max(id_usuario) as maxId from usuario;");
        while ($register = $return -> fetch_assoc()) {
            $userId = $register['maxId'];
        }

        switch ($avatarForeignKey) {
            case 2: updateAvatar(2, $userId);
            break;

            case 3: updateAvatar(3, $userId);
            break;

            case 4: updateAvatar(4, $userId);
            break;

            default: header("Location: successfulUserPage.php");
            break;
        }

    } else {
        echo "Houve um erro na inserção no banco!";
    }

    $connection->Close();
}

function updateAvatar($avatarId, $userId) {
    $connection = new mysqli('localhost', 'admin',
        '@Luno123', 'la_tem');

    $sql = "UPDATE usuario SET avatar_fk = $avatarId where id_usuario = $userId";

    $return = $connection->query($sql);
    if ($return > 0) {
        header("Location: successfulUserPage.php");
    } else {
        echo "Houve um erro ao atualizar o banco!";
    }
}
    function insertNewUser($password, $avatarForeignKey) {
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

        return "insert into usuario (nome, nome_social, senha,
                     cpf, email, avatar_fk, rua,
                     bairro, numero, cep, cidade,
                     uf, pais, telefone, ddd, codigo_de_pais)
        values ('$userName', '$userSocialName', '$password',
        '$userCpf', '$userEmail', $avatarForeignKey,
        '$userRoad', '$userDistrict', $userNumber,
        '$userCep', '$userCity', '$userUf',
        '$userCountry', $userPhone, '$userDdd',
        '$userCountryCode')";
    }

?>