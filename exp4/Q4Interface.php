<?php

interface Shape {
    public function calculateArea();
}

class Triangle implements Shape {
    private $b;
    private $h;

    public function __construct($b, $h) {
        $this->b = $b;
        $this->h = $h;
    }

    public function calculateArea() {
        return 0.5 * $this->b * $this->h;
    }
}

class Rectangle implements Shape {
    private $w;
    private $h;

    public function __construct($w, $h) {
        $this->w = $w;
        $this->h = $h;
    }

    public function calculateArea() {
        return $this->w * $this->h;
    }
}

$triangle = new Triangle(10, 5);
echo "Triangle area: " . $triangle->calculateArea() . "\n";

$rectangle = new Rectangle(4, 5);
echo "Rectangle area: " . $rectangle->calculateArea() . "\n";

?>
