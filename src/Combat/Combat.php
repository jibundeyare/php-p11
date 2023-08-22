<?php declare(strict_types = 1);

namespace App\Combat;

use App\Personnage\Hero;
use App\Personnage\Ennemi;

class Combat
{
    private $hero = null;
    private $ennemi = null;

    public function __construct(Hero $hero, Ennemi $ennemi)
    {
        $this->hero = $hero;
        $this->ennemi = $ennemi;
    }

    public function getHero(): Hero
    {
        return $this->hero;
    }

    public function setHero(Hero $hero): static
    {
        $this->hero = $hero;

        return $this;
    }

    public function getEnnemi(): Ennemi
    {
        return $this->ennemi;
    }

    public function setEnnemi(Ennemi $ennemi): static
    {
        $this->ennemi = $ennemi;

        return $this;
    }

    public function action()
    {
        // le ennemi attaque
        $attaque = $this->ennemi->getPuissance() * random_int(5, 15) / 10;
        $vie = $this->hero->getVie() - $attaque;
        $this->hero->setVie($vie);

        // si le héro est mort, il ne peut pas contre-attaquer
        if ($this->hero->getVie() == 0) {
            return;
        }

        // le héro contre-attaque
        $attaque = $this->hero->getPuissance() * random_int(5, 15) / 10;
        $vie = $this->ennemi->getVie() - $attaque;
        $this->ennemi->setVie($vie);
    }

    public function isFini()
    {
        if ($this->hero->getVie() == 0 || $this->ennemi->getVie() == 0) {
            return true;
        }

        return false;
    }
}
