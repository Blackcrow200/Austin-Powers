<?php
class Austin {
    public function __construct($name) {
        echo "<pre>Cachez vous Mesdames, voici $name.</pre> ";
        $this->name = "Austin";
        $this->life = 100;
        $this->damage = 10;
        $this->mojo = 1000;
    }

    public function talk($message = 'Salut Chérie') {
        echo ($this->name).":".$message."</pre><br />";
    }

    public function attack($monster) {
        $this->talk("Prend ça, suppot du Docteur Denfer ! $monster->name");
        $monster->isHit($this);
    }

    public function __toString() {
        return "Hero - $this->name [life=$this->life , damage=$this->damage]";
    }

    public function isHit($Austin) {
        $this->talk("Aïe, j'ai être matinal, j'ai mal !");
        $this->life = $this->life - $monster->damage;
    }
}