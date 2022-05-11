<?php

class Person {

    public $name,$age,$gender,$proNoun,$possProNoun,$birthYear;

    public function __construct($Name,$Age,$Gender)
    {
        $this->name = $Name;
        $this->age = $Age;
        $this->gender = $Gender;
        $this->proNoun = $this->gender === "male" ? "he" : "she";
        $this->possProNoun = $this->gender === "male" ? "his" : "her";
        $this->birthYear = date("Y") - $this->age;
    }

//    public function proNoun(){
//         return $this->gender === "male" ? "he" : "she";
//    }

//    public function birthYear(){
//        return date("Y") - $this->age;
//    }

    public function intro(){
        return $this->proNoun." is ".$this->name." and ".$this->age." years old born in ".$this->birthYear;

    }
}