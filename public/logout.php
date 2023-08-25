<?php

session_start();

// destruction des données de la session
session_unset();
session_destroy();

header('Location: index.php', true, 302);
exit();
