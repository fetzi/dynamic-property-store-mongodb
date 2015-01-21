<?php
include("bootstrap.php");


$productTypes = array("A", "B", "C", "D");

for($i = 0; $i < 1000; $i++) {
    $product = new \Jopic\Documents\Product();

    $product->setName("Product 1");
    $product->setProductType($productTypes[rand(0, 3)]);
    $product->addAttribute("attr1", "Value " . rand(1, 100000));
    $product->addAttribute("attr2", rand(1, 1000));

    $dm->persist($product);
}

$dm->flush();