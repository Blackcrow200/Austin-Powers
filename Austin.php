<?php
class Hero {
    public function __construct() {
        echo "<pre>Creation of a Hero called $name.</pre> ";
        $this->name = "Austin";
        $this->life = 100;
        $this->damage = 10;
    }
    public function talk($message = 'Salut Ch�rie') {
        echo ($this->name).":".$message."</pre><br />";
    }
    public function attack($monster) {
        $this->talk("Prend �a, suppot de Dr Denfer ! $monster->name");
        $monster->isHit($this);
    }
    public function __toString() {
        return "Hero - $this->name [life=$this->life , damage=$this->damage]";
    }
    public function isHit($monster) {
        $this->talk("A�e, j'ai mal !");
        $this->life = $this->life - $monster->damage;
    }
}