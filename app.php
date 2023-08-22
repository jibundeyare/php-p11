<?php declare(strict_types = 1);

// la classe Combat est composée des classes Monstre et Hero
use App\Combat\Combat;
// la classe Hero dépend de la classe Personnage
use App\Personnage\Hero;
// la classe Monstre dépend de la classe Personnage
use App\Personnage\Monstre;
use App\Personnage\Personnage;
// la classe Vampire dépend de la classe Personnage
use App\Personnage\Vampire;

require __DIR__.'/vendor/autoload.php';

// Attention : la classe Personnage est une classe abstraite, elle ne peut pas être instanciée directement
// PHP Fatal error:  Uncaught Error: Cannot instantiate abstract class
// $p = new Personnage();
// $p->setCri('... !!!')
//     ->crier()
// ;


$m = new Monstre();
$m->crier();
echo $m->getPuissance()."\n";

$v = new Vampire();

$v
    ->crier()
    ->setPuissance(20)
;
echo $v->getPuissance()."\n";

$hero = new Hero();

$combat1 = new Combat($hero, $m);
$combat2 = new Combat($hero, $v);

while ($combat1->isFini() == false || $combat2->isFini() == false) {
    // le combat continue
    $combat1->action();
    $combat2->action();

    echo "m: ".$m->getVie()."\n";
    echo "v: ".$v->getVie()."\n";
    echo "hero: ".$hero->getVie()."\n";
    echo "\n";
}

if ($hero->getVie() == 0 && $m->getVie() == 0 && $v->getVie() == 0) {
    echo "Match nul\n";
} elseif ($hero->getVie() > 0) {
    echo "Vous avez gagné\n";
} else { // $hero->getVie() == 0 
    echo "Vous avez perdu\n";
}
