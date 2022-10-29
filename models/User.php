<?php

class User{
    public $name;
    public $surname;
    public $address;
    public $email;
    public $credit_card_number;
    public $credit_card_expiration_date;
    public $credit_card_cvv;
    public $credit_card_accountholder;

    public $cart = [];

    public function addItem($item){
        $this->cart[] = $item;
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
}

?>