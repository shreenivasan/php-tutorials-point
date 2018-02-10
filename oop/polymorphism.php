<?php
interface Shape{
    public function calculateArea();
}

class Square implements Shape{
    var $side = 10;
    public function calculateArea() {
        $area = $this->side*$this->side;
        return $area;
    }
}

class Circle implements Shape{
    var $radius= 10;
    public function calculateArea() {
        $area = 3.14*$this->radius*$this->radius;
        return $area;
    }
}


function getArea(Shape $s){
    return $s->calculateArea();
}

$objCircle = new Circle();

$objSquare = new Square();
echo getArea($objSquare);
echo '<br>';
echo getArea($objCircle);