<?php
include_once('circle.php');
class cylinder extends circle {
    public $height;
    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color);
        $this->height=$height;
    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}
