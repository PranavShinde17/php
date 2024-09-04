<?php

abstract class Fruit {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function color();
}

class Apple extends Fruit {
    public function color() {
        echo $this->name." is red.\n";
    }
}

class Orange extends Fruit {
    public function color() {
        echo $this->name." is orange.\n";
    }
}

class Grape extends Fruit {
    public function color() {
        echo $this->name." is purple.\n";
    }
}

$apple = new Apple("Apple");
$orange = new Orange("Orange");
$grape = new Grape("Grape");

$apple->color();
$orange->color();
$grape->color();

?>