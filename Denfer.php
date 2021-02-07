<?php
include_once "Humain.php";
class Denfer extends Humain{
    public function __construct() {
        $this->name = 'denfer';
        $this->life = 100;
        $this->damage = 20;
        echo "<pre>Creation of a Monster called $this->name.</pre> ";
    }

    public function attaque($Ennemi) {
        $this->parle("Je vais te détruire");
        $Ennemi->isHit($this);
    }

    public function __toString() {
        return "Denfer - $this->name [life=$this->life , damage=$this->damage]";
    }

    public function isHit($Ennemi) {
        $this->parle("Oh lala... je suis \"blessé\"... C'est crispant...");
        $this->life = $this->life - $Ennemi->damage;
        //Auto riposte
        $this->attaque($Ennemi);
    }
}