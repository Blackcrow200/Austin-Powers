<?php
include_once "Humain.php";
<<<<<<< HEAD
class Austin  extends Humain implements Gentil{
=======
class Austin  extends Humain{
>>>>>>> Arthur
    public function __construct() {
        $this->name = "Austin";
        $this->life = 100;
        $this->damage = 10;
        $this->mojo = 100;
        echo "<pre>Creation of a Hero called  $this->name.</pre> ";
    }

    public function attaque($Ennemi) {
        $this->parle("Je vous arrête, ->name");
        $Ennemi->isHit($this);
    }

    public function __toString() {
        return "Hero - $this->name [life=$this->life , damage=$this->damage]";
    }

    public function isHit($Ennemi) {
        $this->parle("Ouch! You've hurt me !");
        $this->life = $this->life - $Ennemi->damage;

    }
}