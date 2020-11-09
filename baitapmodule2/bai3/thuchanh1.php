<?php
class Rectangle{
    public $wight;
    public $height;
   public function _construct($wight,$height){
       $this->wight=$wight;
       $this->height=$height;
   }
    public function getArea(){
       return $this->wight*$this->height;
    }
    public function getPerimeter(){
       return(($this->wight+$this->height)*2);
    }
    public function display(){
       return " Rectangle { "." wight ".$this->wight.", height = ".$this->height." } ";
    }
}
$wight=10;
$height=20;
$rectangle=new Rectangle($wight,$height);
echo $rectangle->wight;
echo $rectangle->height;
$rectangle->height=30;
$rectangle->wight=20;
echo $rectangle->wight;
echo $rectangle->height;
echo $rectangle->getPerimeter();
echo $rectangle->getArea();
echo (" Your Rectangle ".$rectangle->display());

