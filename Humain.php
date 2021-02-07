<?php
abstract class Humain{
    protected $name;
    protected $life = 100;

    public function parle($message) {
        echo '<pre>'.($this->name).": $message </pre><br />";
    }

<<<<<<< HEAD
    public function isHit($Ennemi) {
        $this->parle("Ouch! You've hurt me !");
        $this->life = $this->life - $Ennemi->damage;
    }
=======
>>>>>>> Arthur
}