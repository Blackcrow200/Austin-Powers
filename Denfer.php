<?php
class Denfer extends Humain{


    public function __construct() {
        $this->name = 'denfer';
        $this->life = 100;
        $this->damage = 20;
        echo "<pre>Creation of a Monster called $this->name.</pre> ";
    }
    
    public function isHit($Enemie) {
        $this->talk("Ouch! You've hurt me !");
        $this->life = $this->life - $Enermie->damage;
    }

    public function attack($Enemie) {
        $this->talk("I'll ruin you!! Feel my wrath !!");
        $Austin->isHit($this);
    }

    public function __toString() {
        return "Denfer - $this->name [life=$this->life , damage=$this->damage]";
    }
}