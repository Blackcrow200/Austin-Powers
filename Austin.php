<?php
include_once "Humain.php";
class Austin  extends Humain{
    public function __construct() {
        $this->name = "Austin";
        $this->life = 100;
        $this->damage = 10;
        $this->mojo = 100;
        echo "<pre>Mesdames, contenez vos orgasmes ! C'est Austin baby !</pre> ";
    }

    public function attaque($Ennemi) {
        $this->parle("Je vous arrête !");
        $Ennemi->isHit($this);
    }

    public function __toString() {
        return "Hero - $this->name [life=$this->life , damage=$this->damage]";
    }

    public function isHit($Ennemi) {
        $this->parle("Aïe, mon Mojo !");
        $this->life = $this->life - $Ennemi->damage;

    }
}