<?php

namespace Jopic\Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ODM\Document
 */
class Product
{

    /**
     * @ODM\Id
     */
    private $id;

    /**
     * @ODM\String
     */
    private $productType;

    /**
     * @ODM\String
     */
    private $name;

    /**
     * @ODM\Hash
     */
    private $attributes = array();

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setProductType($productType) {
        $this->productType = $productType;
    }

    public function getProductType() {
        return $this->productType;
    }

    public function addAttribute($name, $value)
    {
        $key = preg_replace('/[^a-z0-9\ \_]/i', '', $name);
        $key = preg_replace('/\s+/i', '_', $key);
        $key = strtolower($key);
        $this->attributes[$key] = array('value' =>$value, 'label' => $name);
    }

    public function getAttribute($name)
    {
        return $this->attributes[$name];
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

}