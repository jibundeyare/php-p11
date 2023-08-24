<?php

session_start();

/*
// ceci fait la même chose que le if (($_SESSION['auth'] ?? false) == false)
if (!isset($_SESSION['auth']) || $_SESSION['auth'] == false) {
    // l'utilisateur n'est pas authentifié
}
*/

if (($_SESSION['auth'] ?? false) == false) {
    // l'utilisateur n'est pas authentifié
    // on le renvoie à la page de login
    header('Location: login.php', true, 302);
    exit();
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page privée</title>
</head>
<body>
    <h1>Page privée</h1>
</body>
</html>