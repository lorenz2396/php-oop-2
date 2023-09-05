<?php

class Products {

    public $name;
    public $description;
    public $price;
    public $category;
    public $img;
    public $available;

    function __construct(
        $name,
        $description,
        $category,
        $img,
        $available = true
    )
    {
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->img = $img;
        $this->available = $available;
    }

    public function setPrice($price)
    {
        if (is_numeric($price) && $price < 1) {
            throw new Exception("Price not valid");
        } else if(is_numeric($price)) {
            $this->price = $price;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }
}