<?php
require_once "vendor/autoload.php";

use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;

$connection = new Connection();

$config = new Configuration();
$config->setProxyDir(__DIR__ . '/src/Jopic/Proxies');
$config->setProxyNamespace('Proxies');
$config->setHydratorDir(__DIR__ . '/Hydrators');
$config->setHydratorNamespace('Hydrators');
$config->setDefaultDB('productdb');
$config->setMetadataDriverImpl(AnnotationDriver::create(__DIR__ . '/src/Jopic/Documents'));

AnnotationDriver::registerAnnotationClasses();

$dm = DocumentManager::create($connection, $config);