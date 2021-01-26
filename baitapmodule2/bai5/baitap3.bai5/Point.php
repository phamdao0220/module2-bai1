<?php
class Point{
    public $x;
    public $y;
    public function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    public function getX(){
        return $this->x;
    }
    public function setX($x){
        $this->x=$x;
    }
    public function gety(){
        return $this->y;
    }
    public function setY($y){
        $this->y=$y;
    }
    public function getXY(){
        return "[$this->x,$this->y]";
    }
    public function setXY($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    public function toString(){
        return "($this->x,$this->y)";
    }
}
