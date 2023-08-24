<?php

require __DIR__.'/../vendor/autoload.php';

session_start();

if (($_POST['password'] ?? '') === '123') {
    // l'utilisateur a renseigné le bon mot de passe
    // il est authentifié
    $_SESSION['auth'] = true;

    // on redirige l'utilisateur vers la page privée
    header('Location: private-page.php', true, 302);
    exit();
} else {
    // l'utilisateur n'a pas renseigné le bon mot de passe
    // il n'est pas authentifié
    $_SESSION['auth'] = false;
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="password" id="" placeholder="password">
    </form>
</body>
</html>