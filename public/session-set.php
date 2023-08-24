<?php

require __DIR__.'/../vendor/autoload.php';

session_start();

dump($_SESSION);

$_SESSION['foo'] = 123;

dump($_SESSION);
