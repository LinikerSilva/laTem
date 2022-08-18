<?php
$password = $_GET['txtPassword'];
$passwordConfirmation = $_GET['txtPasswordConfirmation'];

if ($password != $passwordConfirmation) {
    header("Location: userRegistry.php?erro=0");
} else {
    header("Location: userAvatarSelection.php");
}
?>