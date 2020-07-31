<?php

class sheep{
    //property
    public $name;
    public $legs;
    public $blood;

    //method
    public function set_name($name){
        $this->name = $name;
    }

    public function set_legs($legs){
        $this->legs = $legs;
    }

    public function set_blood($blood){
        $this->blood = $blood;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_legs(){
        return $this->legs;
    }

    public function get_blood(){
        return $this->blood;
    }
}

$sheep = new sheep;

?>