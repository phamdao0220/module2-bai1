<?php
class CustomException extends Exception{
    public function errorMessage(){
        $errorMsg='Error on line '.$this->getLine().'in '.$this->getFile().': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}
$email="Phamd14112002gmail.com";
try{
    if (filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
        throw new CustomException($email);
    }
}
catch (CustomException $e){
    echo $e->errorMessage();
}
