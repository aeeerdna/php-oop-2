<?php

class Item{

    public $item_name;
    public $category;
    public $brand;
    public $price;
    public $vat = 22;
    public $type;
    public $animal_size;
    public $description = '';

    function __construct($_item_name, $_brand, $_price){
        $this->item_name = $_item_name;
        $this->brand = $_brand;
        $this->price = $_price;
    }
}

?>