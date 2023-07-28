<?php

$foo = 123;
$var = 'foo';

// variables standards
echo $foo."\n"; // 123
echo $var."\n"; // foo

// variable de variable
echo $$var."\n"; // 123
