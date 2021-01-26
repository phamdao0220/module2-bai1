<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-15
 * Time: 10:27
 */

namespace App\model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;


    public function __construct($dsn, $username, $password)
    {
        $this->dsn = 'mysql=local:host;dsname=luyentap';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

}

