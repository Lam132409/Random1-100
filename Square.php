<?php

include_once 'Shape.php';
include_once 'Resizeable.php';
class Square extends Shape implements Resizeable
{
    public $width;

    public function __construct($name, $width)
    {
        parent::__construct($name);
        $this->width = $width;
    }

    public function getArea()
    {
        return pow($this->width, 2);
    }

    public function resize($resize)
    {
        return $this->getArea() + ($this->getArea() * $resize) / 100;
    }
}