<?php
include_once 'Shape.php';
include_once 'Resizeable.php';
class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){
        return $this->height * $this->width;
    }

    public function resize($resize)
    {
        return $this->getArea() + ($this->getArea() * $resize) / 100;
    }
}