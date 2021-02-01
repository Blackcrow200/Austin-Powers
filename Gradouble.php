<?php
include_once "Humain.php"

class Gradouble extends Humain implements Mechant{


    public function __construct() {
        
        $this->name = "gradouble";
        $this->life = 200;
        $this->damage = 2;
        echo "<pre>Le sol tremble... C'est gradouble ! $name.</pre> ";
        
    }

    
    public function attack($hero) {
        $this->parle("J'vais m'asseoir sur toi tu vas voir !");
        $hero->isHit($this);
    }

    public function __toString() {
        return "Monster - $this->name [life=$this->life , damage=$this->damage]";
    }
}