<?php

class Product{

    public $product_name;
    public $category;
    public $brand;
    public $price;
    public $vat = 22;
    public $type;
    public $animal_size;
    public $description = '';

    function __construct($_product_name, $_brand, $_price){
        $this->product_name = $_product_name;
        $this->brand = $_brand;
        $this->price = $_price;
    }
}

?>