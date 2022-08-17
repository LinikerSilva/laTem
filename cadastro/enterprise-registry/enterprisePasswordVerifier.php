<?php
$password = $_POST['txtPassword'];
$passwordConfirmation = $_POST['txtPasswordConfirmation'];

if ($password != $passwordConfirmation) {
    header("Location: enterpriseRegistry.php?erro=0");
} else {
    //TODO aqui a página já está cadastrada, agora ela é redirecionada para a tela de login empresarial,
    // trocar o nome do arquivo aqui depois
    header("Location: telaDeLogin.php");
}
?>