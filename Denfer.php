<?php
class Monster {

    public function __construct($name) {
        echo "<pre>Creation of a Monster called $name.</pre> ";
        $this->name = $name;
        $this->life = 100;
        $this->damage = 2;
    }
    public function talk($message) {
        echo "<pre>".strtoupper($this->name).": $message </pre><br />";
    }
    
    public function isHit($hero) {
        $this->talk("Ouch! You've hurt me !");
        $this->life = $this->life - $hero->damage;
        
        // Hit back
        $this->attack($hero);
    }

    public function attack($hero) {
        $this->talk("I'll ruin you!! Feel my wrath !!");
        $hero->isHit($this);
    }

    public function __toString() {
        return "Monster - $this->name [life=$this->life , damage=$this->damage]";
    }
}