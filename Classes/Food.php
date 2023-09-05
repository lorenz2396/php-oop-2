<?php

include_once __DIR__ . "/Products.php";

class Food extends Products
{
    public $expiration;

    function __construct(
        $name,
        $description,
        $category,
        $img,
        $available = true,
        $expiration
        )
    {
        parent::__construct($name, $description, $category, $img, $available);
        $this->expiration = $expiration;
    }
}