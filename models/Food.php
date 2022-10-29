<?php
require_once __DIR__ . '/Product.php';

class Food extends Product{

    public $category = 'Food';
    public $food_form = '';
    public $food_brand = '';
    public $breed_size = '';
    public $ingredients = [];
    public $food_description = '';

}
?>
