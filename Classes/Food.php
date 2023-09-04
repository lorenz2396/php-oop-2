<?php

include_once __DIR__ . "/Products.php";

class Food extends Products
{
    public $type;

    function __construct($name, $description, $category, $img, $type)
    {
        parent::__construct($name, $description, $category, $img);
        $this->type = $type;
    }
}