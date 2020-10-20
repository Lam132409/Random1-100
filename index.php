<?php
include_once "Circle.php";
include_once "Rectangle.php";
include_once "Square.php";
$circle = new Circle("Circle",3);
$resize = mt_rand(1,100);
echo "Circle: ". $circle->resize($resize).'<br>';
$Rectangle = new Rectangle("Rectangle",5,6);
echo "Rectangle: ". $Rectangle->resize($resize)."<br>";
$square = new Square('Square',5);
echo "Square: ". $square->resize($resize);