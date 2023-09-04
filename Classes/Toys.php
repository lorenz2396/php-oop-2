<?php

include_once __DIR__ . "/Products.php";

class Toys extends Products
{
    public $type;
    public $material;

    function __construct($name, $description, $category, $img, $type, $material)
    {
        parent::__construct($name, $description, $category, $img);
        $this->type = $type;
        $this->material = $material;
    }
}