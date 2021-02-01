<?php
abstract class Humain{
    protected $name;
    protected $life = 100;

    public function parle($message) {
        echo '<pre>'.($this->name).": $message </pre><br />";
    }
}