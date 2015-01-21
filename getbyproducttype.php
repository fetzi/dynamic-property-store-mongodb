<?php
include("bootstrap.php");

$repository = $dm->getRepository("Jopic\\Documents\\Product");

$products = $repository->findBy(array("productType" => "A"));

echo count($products);