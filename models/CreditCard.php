<?php

class CreditCard{
    public $number;
    public $expiration_date;
    public $cvv;
    public $accountholder;

    function __construct($_number, $_expiration_date, $_cvv, $_accountholder){
        $this->number = $_number;
        $this->expiration_date = $_expiration_date;
        $this->cvv = $_cvv;
        $this->accountholder = $_accountholder;
    }

    public function isValid(){
        return true;
    }

    public function pay($price){
        $success = true;

        try{

        }catch(Exception $e){
            $success = false;
        }
        return $success;
    }
}


?>