<?php
class Hero {
    public function __construct($name) {
        echo "<pre>Creation of a Hero called $name.</pre> ";
        $this->name = $name;
        $this->life = 100;
        $this->damage = 10;
    }
    public function talk($message = 'Hello, Hello.') {
        echo '<pre>'.strtoupper($this->name).":".$message."</pre><br />";
    }
    public function attack($monster) {
        $this->talk("Take this you fithy monster named $monster->name");
        $monster->isHit($this);
    }
    public function __toString() {
        return "Hero - $this->name [life=$this->life , damage=$this->damage]";
    }
    public function isHit($monster) {
        $this->talk("Ouch! I'm hurt !");
        $this->life = $this->life - $monster->damage;
    }
}