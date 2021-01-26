<?php
include_once"models/product.php";
include_once "services/product manger.php";
use services\ProductManager;
use models\Product;
$productManager = new ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
}
