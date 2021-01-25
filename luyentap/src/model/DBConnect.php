<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-11
 * Time: 08:04
 */

namespace App\model;


class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=luyentap';
        $this->username = "root";
        $this->password = "123456@Abc";

    }

    public function connect()
    {
        try {
            return \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
