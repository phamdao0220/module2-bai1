<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-11
 * Time: 11:27
 */

namespace App\controller;


class studentController
{
protected $studentController;
public function __construct()
{
    $this->studentController=new StudentController();
    
}

    public function show()
    {
      $students=$this->studentController->getAll();
      include_once 'src/view/list.php';
}
}
