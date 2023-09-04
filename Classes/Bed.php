<?php

include_once __DIR__ . "/Products.php";

class Bed extends Products
{
    public $type;
    public $model;

    function __construct($_name, $_description, $_category, $_img, $_type, $_model)
    {
        parent::__construct($_name, $_description, $_category, $_img);
        $this->type = $_type;
        $this->model = $_model;
    }
}