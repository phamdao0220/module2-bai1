<?php
include_once ('ong.php');
class cha extends ong
{
    public $sing;

    public function __construct( $run, $sing)
    {
        parent::__construct( $run,$sing);
        $this->sing = $sing;
    }

    public function Sing() {
   return ;

    }
}
