<?php
class User{
    private $name;
    private $surname;
    private $email;
    private $age;
    private $gender;

    public function __construct(
                                $_name,
                                $_surname,
                                $_email){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
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
}

?>