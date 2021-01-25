<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-11
 * Time: 08:28
 */

namespace App\model;


class studentModel
{
public $database;
public function __construct()
{
    $db=new DBConnect;
    $this->database=$db->connect();

}

    public function getAll()
    {

        $sql='SELECT * FROM student LIMIT 1,15';
        $stmt=$this->database->query($sql);
        $data= $stmt->fetchAll();
        return $data;

}
}
