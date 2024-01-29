<?php

require_once "../../vendor/autoload.php";
use App\Model\Product;

$product = new Product();
print_r($product->findAll());

?>
