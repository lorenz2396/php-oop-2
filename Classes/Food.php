<?php

include_once __DIR__ . "/Products.php";

class Food extends Products
{
    public $expiration;
    public $type;

    function __construct(
        $name,
        $description,
        $category,
        $img,
        $available,
        $expiration,
        $type
        )
    {
        parent::__construct($name, $description, $category, $img, $available);
        $this->expiration = $expiration;
        $this->type = $type;
    }
}