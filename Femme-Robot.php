<<<<<<< Updated upstream
=======
<?php
include_once "Humain.php"

class FemBot extends Humain implements Mechant{


    public function __construct() {
        
        $this->name = "Femme-Robot";
        $this->life = 90;
        $this->damage = 10;
        echo "<pre>Qu'elle est belle... ATTENTION ELLE A UN FLINGUE. $name.</pre> ";

    }

    
    public function attack($hero) {
        $this->parle("Tuez Austin, Tuez Austin.");
        $hero->isHit($this);
    }

    public function __toString() {
        return "Monster - $this->name [life=$this->life , damage=$this->damage]";
    }
}
>>>>>>> Stashed changes
