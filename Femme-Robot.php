<?php
include_once "Humain.php";

class FemBot extends Humain {


    public function __construct() {
        
        $this->name = "Femme-Robot";
        $this->life = 90;
        $this->damage = 10;
        echo "<pre>Qu'elle est belle... ATTENTION ELLE A UN FLINGUE.</pre> ";

    }

    
    public function attaque($Ennemi) {
        $this->parle("Tuez Austin, Tuez Austin.");
        $Ennemi->isHit($this);
    }

    public function isHit($Ennemi) {
        $this->parle("Erreur, erreur...");
        $this->life = $this->life - $Ennemi->damage;

    }
    public function __toString() {
        return "Monster - $this->name [life=$this->life , damage=$this->damage]";
    }
}