<?php
include_once(dirname(__FILE__) . '/../AbstractClass/Fruint.php');

class Orange extends Fruint
{
    public function howToEat()
    {
        return "Orange could be juiced";
    }
}
