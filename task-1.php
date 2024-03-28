<?php
class Shape {
    public function area(){
        return 0;
    }
}

class Circle extends Shape {
    private $radius;
    const pi = 3.14159;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function area(){
        return self::pi * ($this->radius * $this->radius);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width , $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function area(){
        return ($this->width * $this->height);
    }
}

$test_cricle = new Circle(5);
$test_rectangle = new Rectangle(5 , 6);
echo "Circle area = " . $test_cricle->area() . "\nRectangle area = " . $test_rectangle->area();

