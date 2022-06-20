<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
    // VARIABLES
    private $food_for;
    private $food_label;
    private $expiration_date;
    private $description;

    // CONSTRUCT
    public function __construct($_name,
                                $_price,
                                $_barcode,
                                $_food_for,
                                $_food_label,
                                $_expiration_date){

        parent::__construct($_name, $_price, $_barcode,);

        $this->food_for = $_food_for;
        $this->food_label = $_food_label;
        $this->expiration_date = $_expiration_date;
    }

    // SETTERS
    public function setFoodFor($_food_for){
        $this->food_for = $_food_for;
    }
    public function setFoodLable($_food_label){
        $this->food_label = $_food_label;
    }
    public function setExpirationDate($_expiration_date){
        $this->expiration_date = $_expiration_date;
    }

    // GETTERS
    public function getFoodFor(){
        return $this->food_for;
    }
    public function getFoodLable(){
        return $this->food_label;
    }
    public function getExpirationDate(){
        return $this->expiration_date;
    }
}

?>