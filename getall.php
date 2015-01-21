<?php
include("bootstrap.php");

$products = $dm->getRepository("Jopic\\Documents\\Product")->findAll();

echo count($products);