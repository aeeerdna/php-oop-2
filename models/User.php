<?php

require_once __DIR__ . '/CreditCard.php';
class User{
    public $name;
    public $surname;
    public $address;
    public $email;
    
    public $creditCard;

    public $cart = [];

    public function addItem($item){
        $this->cart[] = $item;
    }

    public function addCreditCard ($_number, $_expiration_date, $_cvv, $_accountholder){
        $this->creditCard = new CreditCard($_number, $_expiration_date, $_cvv, $_accountholder);
    }

    public function checkOut(){
        $totalPrice = 0;
        $totalVat = 0;

        foreach($this->items as $item){
            $totalPrice += $item->price;
            $totalVat += ($item->price * $item->vat / 100);
        }

        return [
            "subtotal" => $totalPrice,
            "vat" => $totalVat,
            "total" => $totalPrice + $totalVat,
        ];

    }

    public function pay(){
        if($this->CreditCard->isValid()){
            $price = $this->checkOut();
            if($this->creditCard->proceedPayment($price['total'])){
                $this->cart = [];
            }; 
        }
    }
}

?>