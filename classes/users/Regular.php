<?php
require_once __DIR__ . "/User.php";

class Regular extends User{
    private $discount;

    public function __construct($_name,
                                $_surname,
                                $_email,
                                $_card_date,
                                $_discount){

        parent::__construct($_name, $_surname, $_email, $_card_date);

        $this->discount = $_discount;
    }
    
    // SETTERS
    public function setDiscount($_discount){
        $this->discount = $_discount;
    }

    // GETTERS
    public function getDiscount(){
        return $this->discount;
    }

}
?>