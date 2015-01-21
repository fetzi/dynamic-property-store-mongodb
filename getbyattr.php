<?php
include("bootstrap.php");

$query = $dm->createQueryBuilder('Jopic\\Documents\\Product')
    //->select("id", "name")
    ->field("attributes.attr2.value")->gte(900)
    ->getQuery();

$products = $query->execute();

foreach($products as $product) {
    print_r($product);
}