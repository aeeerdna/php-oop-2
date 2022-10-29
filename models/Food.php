<?php
require_once __DIR__ . '/Product.php';

class Food extends Product{

    public $category = 'Food';
    public $food_form = '';
    public $breed_size = '';
    public $ingredients = [];
    
}
?>
