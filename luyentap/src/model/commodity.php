<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2020-12-11
 * Time: 11:03
 */

namespace App\model;


class student
{
public $id;
public $name;
public $age;
public $address;

    /**
     * student constructor.
     * @param $name
     * @param $age
     * @param $address
     */
    public function __construct($name, $age, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

}
