<?php declare(strict_types = 1);

namespace App\Mixin;

trait Criable
{
    protected $cri = '';

    public function getCri(): string
    {
        return $this->cri;
    }

    public function setCri($cri)
    {
        if (strrpos($cri, '!!!') !== strlen($cri) - 3) {
            throw new Exception('Les cris doivent se terminer avec trois points d\'exclamation');
        }

        $this->cri = $cri;

        // design pattern "fluent"
        return $this;
    }

    public function crier()
    {
        echo $this->cri."\n";

        // design pattern "fluent"
        return $this;
    }
}
