<?php
class User{
    private $name;
    private $surname;
    private $email;
    private $card_date;
    private $age;
    private $gender;

    public function __construct(
                                $_name,
                                $_surname,
                                $_email,
                                $_card_date){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->card_date = $_card_date;

    }

    public function setName($_name){
        $this->name = $_name;
    }
    public function setSurname($_surname){
        $this->surname = $_surname;
    }
    public function setEmail($_email){
        $this->email = $_email;
    }
    public function setAge($_age){
        $this->age = $_age;
    }
    public function setGender($_gender){
        $this->gender = $_gender;
    }
    public function setCardDate($_card_date){
        $this->card_date = $_card_date;
    }

    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getAge(){
        return $this->age;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getCardDate(){
        return $this->card_date;
    }
}

?>