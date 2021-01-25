<?php

namespace App\Model;
class Orders
{
    protected $id;
    protected $orderDate;
    protected $requiredDate;
    protected $shippedDate;
    protected $status;
    protected $comments;
    protected $customerNumber;

    public function __construct($orderDate, $requiredDate, $shippedDate, $status, $comments, $customerNumber)
    {
        $this->orderDate = $orderDate;
        $this->requiredDate = $requiredDate;
        $this->shippedDate = $shippedDate;
        $this->status = $status;
        $this->comments = $comments;
        $this->customerNumber = $customerNumber;
    }

    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getOrderDate()
    {
        return $this->orderDate;
    }


    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
    }

    public function getRequiredDate()
    {
        return $this->requiredDate;
    }


    public function setRequiredDate($requiredDate)
    {
        $this->requiredDate = $requiredDate;
    }

    public function getShippedDate()
    {
        return $this->shippedDate;
    }

    public function setShippedDate($shippedDate)
    {
        $this->shippedDate = $shippedDate;
    }


    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
    }

}
