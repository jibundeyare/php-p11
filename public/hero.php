<?php

require __DIR__.'/../vendor/autoload.php';

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero</title>
</head>
<body>
    <h1>Hero</h1>
    <form action="" method="post">
        <div>
            <label for="cri">Cri</label>
            <input type="text" name="cri" id="cri" value="<?= $_POST['cri'] ?? '' ?>">
        </div>
        <div>
            <label for="puissance">Puissance</label>
            <input type="number" name="puissance" id="puissance" value="<?= $_POST['puissance'] ?? '' ?>">
        </div>
        <div>
            <label for="vie">Vie</label>
            <input type="number" name="vie" id="vie" value="<?= $_POST['vie'] ?? '' ?>">
        </div>
        <div>
            <button type="submit">Créer</button>
        </div>
    </form>
    <div>
        <?php
        dump($_POST);
        dump($_POST['cri'] ?? '');
        dump(isset($_POST['nom']));
        ?>
    </div>
</body>
</html>