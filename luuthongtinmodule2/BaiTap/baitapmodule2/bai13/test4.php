<?php
class CustomException extends Exception{
    public function errorMessage(){
        $errorMsg=$this->errorMessage().'is not a valid E-Mail address.';
    }
}
$email="someone@example.com";
try{
    try{
        if (strpos($email,"example")!==FALSE){
            throw new Exception($email);
        }
    }
    catch (Exception $e){
        throw new CustomException($email);
    }
}
catch (CustomException $e){
    echo $e->errorMessage();
}
