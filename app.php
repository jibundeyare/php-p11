<?php

require __DIR__.'/src/Personnage.php';
// la classe Monstre dépend de classe Personnage
require __DIR__.'/src/Monstre.php';
// la classe Hero dépend de classe Personnage
require __DIR__.'/src/Hero.php';
// la classe Combat est composée des classes Monstre et Hero
require __DIR__.'/src/Combat.php';

$m = new Monstre();
$m->crier();
echo $m->getPuissance()."\n";

$m2 = new Monstre();

$m2
    ->setCri('CRIIII !!!')
    ->crier()
    ->setPuissance(20)
;
echo $m2->getPuissance()."\n";

$hero = new Hero();

$combat1 = new Combat($hero, $m);
$combat2 = new Combat($hero, $m2);

while ($combat1->isFini() == false || $combat2->isFini() == false) {
    // le combat continue
    $combat1->action();
    $combat2->action();

    echo "m: ".$m->getVie()."\n";
    echo "m2: ".$m2->getVie()."\n";
    echo "hero: ".$hero->getVie()."\n";
    echo "\n";
}

if ($hero->getVie() == 0 && $m->getVie() == 0 && $m2->getVie() == 0) {
    echo "Match nul\n";
} elseif ($hero->getVie() > 0) {
    echo "Vous avez gagné\n";
} else { // $hero->getVie() == 0 
    echo "Vous avez perdu\n";
}
