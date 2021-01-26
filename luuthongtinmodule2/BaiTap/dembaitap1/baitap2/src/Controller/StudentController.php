<?php

namespace App\Controller;

use App\Model\StudentModel;
use App\Model\Student;

class StudentController
{
    protected $studentModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();

    }

    public function show()
    {
        $students = $this->studentModel->getAll();
        include_once "src/View/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once "src/View/add.php";
        } else {
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $address = $_REQUEST['address'];
            $student = new Student($name, $age, $address);
            $this->studentModel->addStudent($student);
            header('location:index.php');

        }
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id=$_REQUEST['id'];
            $student=$this->studentModel->getStudentById($id);
            include_once "src/View/edit.php";
        } else {
            $id=$_REQUEST['id'];
            $name = $_REQUEST['name'];
            $age = $_REQUEST['age'];
            $address = $_REQUEST['address'];
            $student = new Student($name, $age, $address);
            $student->setId($id);
            $this->studentModel->editStudent($student);
            header('location:index.php');

        }
    }
    public function delete(){
        $id = $_REQUEST['id'];
//        var_dump($id);die();
        $this->studentModel->deleteStudent($id);
        header('location:index.php');
        echo('ban co chac muon xoa');
    }


}
