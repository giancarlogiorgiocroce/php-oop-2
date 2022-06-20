<?php
require_once __DIR__ . "/User.php";

class Regular extends User{
    private $discount;
    private $card_date;

    public function __construct($_name,
                                $_surname,
                                $_email,
                                $_discount,
                                $_card_date){

        parent::__construct($_name, $_surname, $_email);

        $this->discount = $_discount;
        $this->card_date = $_card_date;
    }
    
    // SETTERS
    public function setDiscount($_discount){
        $this->discount = $_discount;
    }
    public function setCardDate($_card_date){
        $this->card_date = $_card_date;
    }

    // GETTERS
    public function getDiscount(){
        return $this->discount;
    }
    public function getCardDate(){
        return $this->card_date;
    }
}
?>