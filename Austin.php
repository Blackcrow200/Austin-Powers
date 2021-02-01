<?php
class Austin  extends Humain {
    public function __construct() {
        $this->name = "Austin";
        $this->life = 100;
        $this->damage = 10;
        $this->mojo = 100;
        echo "<pre>Creation of a Hero called  $this->name.</pre> ";
    }

    public function isHit($Enemie) {
        $this->talk("Ouch! I'm hurt !");
        $this->life = $this->life - $Enemie->damage;
    }

    public function attack($Enemie) {
        $this->parle("Je vous arr�te, ->name");
        $Enemie->isHit($this);
    }

    public function __toString() {
        return "Hero - $this->name [life=$this->life , damage=$this->damage]";
    }
}