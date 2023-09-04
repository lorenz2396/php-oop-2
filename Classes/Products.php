<?php

class Products {

    public $name;
    public $description;
    public $price;
    public $category;
    public $img;
    public $isForDogs;
    public $isForCats;


    function __construct($name, $description, $category, $img)
    {
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->img = $img;
    }

    public function setPrice($price)
    {
        if ($price < 0) {
            throw new Exception("Free");
        } else {
            $this->price = $price;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }
}