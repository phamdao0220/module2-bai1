<?php
namespace App\Controller;

use App\Model\BillModel;
use App\Model\Orders;

class BillController
{
protected $billController;

    public function __construct()
    {
     $this->billController=new BillModel();

}

    public function show()
    {
        $orders=$this->billController->getAll();
        include_once "src/View/list.php";

}

    public function add(){
    if ($_SERVER['REQUEST_METHOD']=="GET"){
        include_once "src/View/add.php";
    }else{
        $orderDate=$_REQUEST['orderDate'];
        $requiredDate=$_REQUEST['requiredDate'];
        $shippedDate=$_REQUEST['shippedDate'];
        $status=$_REQUEST['status'];
        $comments=$_REQUEST['comments'];
        $customerNumber=$_REQUEST['customerNumber'];
        $orders=new Orders($orderDate,$requiredDate,$shippedDate,$status,$comments,$customerNumber);
        $this->billController->addOrders($orders);
        header('location:index.php?page=list');
    }

}

    public function edit(){

    if ($_SERVER['REQUEST_METHOD']=='GET'){
        $id=$_REQUEST['id'];
        $orders=$this->billController->getOrdersId($id);
        include_once "src/View/edit.php";
    }else{
        $id=$_REQUEST['id'];
        $orderDate=$_REQUEST['orderDate'];
        $requiredDate=$_REQUEST['requiredDate'];
        $shippedDate=$_REQUEST['shippedDate'];
        $status=$_REQUEST['status'];
        $comments=$_REQUEST['comments'];
        $customerNumber=$_REQUEST['customerNumber'];
        $newOrders=new Orders($orderDate,$requiredDate,$shippedDate,$status,$comments,$customerNumber);
        $this->billController->editOrders($newOrders,$id);
        header('location:index.php?page=list');
    }

}

}
