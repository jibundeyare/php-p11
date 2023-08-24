<?php declare(strict_types = 1);

namespace App\Personnage;

use App\Mixin\Criable;

// le mot clé "abstract" empêche que la classe soit instanciée directement
abstract class Personnage
{
    use Criable;

    protected $vie = 100;
    protected $puissance = 0;

    public function getVie()
    {
        return $this->vie;
    }

    public function setVie($vie)
    {
        if ($vie < 0) {
            $vie = 0;
        }

        $this->vie = $vie;

        // design pattern "fluent"
        return $this;
    }

    public function getPuissance()
    {
        return $this->puissance;
    } 

    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        // design pattern "fluent"
        return $this;
    }
}