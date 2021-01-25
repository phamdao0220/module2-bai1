<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-04
 * Time: 09:12
 */

namespace App\model;
use PDO;

class DBConnect
{
public $dsn;
public $username;
public $password;
public function __construct()
{
    $this->dsn="mysql:host=localhost;dbname=classicmodels";
    $this->username="root";
    $this->password="123456@Abc";
}

    public function connect()
    {


}
}
