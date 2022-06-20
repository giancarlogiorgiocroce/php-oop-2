<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
    // VARIABLES
    private $toy_for;

    // CONSTRUCT
    public function __construct($_name,
                                $_price,
                                $_barcode,
                                $_toy_for){

        parent::__construct($_name, $_price, $_barcode,);

        $this->toy_for = $_toy_for;
    }

    // SETTERS
    public function setToyFor($_toy_for){
        $this->toy_for = $_toy_for;
    }
    // GETTERS
    public function getToyFor(){
        return $this->toy_for;
    }
}

?>