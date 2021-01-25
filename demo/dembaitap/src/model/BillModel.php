<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-04
 * Time: 09:20
 */

namespace App\model;

use PDO;
use function Sodium\crypto_box_publickey_from_secretkey;

class BillModel
{
public $database;


public function __construct()
{
    $db= new DBConnect();
    $this->database=$db->connect();

}

    public function getAll()
    {
        $sql="SELECT*FROM "

}
}
