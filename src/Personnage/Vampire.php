<?php declare(strict_types = 1);

namespace App\Personnage;

class Vampire extends Personnage implements Ennemi
{
    protected $puissance = 30;
    protected $cri = "KSSSSSS !!!";
}
