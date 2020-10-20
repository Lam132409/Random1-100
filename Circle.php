<?php

include_once "Resizeable.php";
include_once 'Shape.php';
class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

//    public function getRadius()
//    {
//        return $this->radius;
//    }
//
//    public function setRadius($radius)
//    {
//        $this->radius = $radius;
//    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function resize($resize)
    {
        return $this->getArea() + ($this->getArea() * $resize) / 100;
    }

}