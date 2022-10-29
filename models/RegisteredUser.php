<?php
require_once __DIR__ . '/User.php';

class RegisteredUser extends User{
    
    public $password;
    public $telephone_number;
    public $profile_img;
    
    private $discount = 20; 

    public function checkOut(){
        $totalCartPrice = parent::checkOut();
        $discount = $this->getDiscount();
        return [
            "subtotal" => $totalCartPrice['subtotal'] * $discount,
            "vat" => $totalCartPrice['vat'] * $discount,
            "total" => $totalCartPrice['total'] * $discount,
        ];
    }

    private function getDiscount(){
        return 100 - ($this->discount) / 100;
    }
}

?>