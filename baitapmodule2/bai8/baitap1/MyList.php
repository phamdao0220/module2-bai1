<?php
class MyList{
    public $element=[];
    public $size;
    public function ArrayList($arr="")
   {
if (is_array($arr)==true){
    $this->element=$arr;
}else{
    $this->element=array();
}
    }
    public function insert($index,$obj){
        array_splice($this->element,$index,0,[$obj]);
    }
    public function add($obj){
array_push($this->element,$obj);
    }
    public function remove($index){
        if ($this->isInteger($index)){
            $newArrayList=array();
        }
    }
}
