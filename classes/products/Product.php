<?php

class Product{
    // VARIABLES
    private $name;
    private $price;
    private $barcode;

    // CONSTRUCT
    public function __construct($_name,
                                $_price,
                                $_barcode){
        $this->name = $_name;
        $this->price = $_price;
        $this->barcode = $_barcode;
    }

    // SETTERS
    public function setName($_name){
        $this->name = $_name;
    }
    public function setPrice($_price){
        $this->price = $_price;
    }
    public function setBarcode($_barcode){
        $this->barcode = $_barcode;
    }

    // GETTERS
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getBarcode(){
        return $this->barcode;
    }

}
