<?php

include_once __DIR__ . "/Products.php";

class Bed extends Products
{
    public $type;
    public $model;

    function __construct($name, $description, $category, $img, $type, $model)
    {
        parent::__construct($name, $description, $category, $img);
        $this->type = $type;
        $this->model = $model;
    }
}