<?php


namespace App\Model;


class BillModel
{
protected $database;
public function __construct()
{
    $db=new DBConnect();
    $this->database=$db->connect();
}
public function getAll(){
    $sql='SELECT * FROM orders LIMIT 1,15';
    $stmt=$this->database->query($sql);
    $data=$stmt->fetchAll();
    return $data;
}
public  function addOrders($orders){
    $sql='INSERT INTO orders VALUE (orderDate=:orderDate,requiredDate=:requiredDate,shippedDate=:shippedDate,status=:status,comments=:comments,customerNumber=:customerNumber)';
    $stmt=$this->database->prepare($sql);
    $stmt->bindParam(':orderDate',$orders->getOrderDate());
    $stmt->bindParam(':requiredDate',$orders->getRequiredDate());
    $stmt->bindParam(':shippedDate',$orders->getShippedDate());
    $stmt->bindParam(':status',$orders->getStatus());
    $stmt->bindParam(':comments',$orders->getComments());
    $stmt->bindParam(':customerNumber',$orders->getCustomerNumber());
    $stmt->execute();
}

    public function getOrdersId($id){
    $sql='SELECT * FROM orders WHERE orderNumber=:id';
    $stmt=$this->database->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    $result=$stmt->fetch();
    return $result;

}

    public function editOrders($newOrders,$_id){
        $sql='UPDATE  orders SET orderDate =:orderDate,requiredDate=:requiredDate,shippedDate=:shippedDate,status=:status,comments=:comments,customerNumber=:customerNumber WHERE orderNumber=:id';
        $stmt=$this->database->prepare($sql);
        $stmt->bindParam(':orderDate',$newOrders->getOrderDate());
        $stmt->bindParam(':requiredDate',$newOrders->getRequiredDate());
        $stmt->bindParam(':shippedDate',$newOrders->getShippedDate());
        $stmt->bindParam(':status',$newOrders->getStatus());
        $stmt->bindParam(':comments',$newOrders->getComments());
        $stmt->bindParam(':customerNumber',$newOrders->getCustomerNumber());
        $stmt->bindParam(':id',$_id);
        $stmt->execute();

}
}
