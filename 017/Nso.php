<?php

class Nso {
    //matomumas
    public $speed = 'fast';
    protected $color = 'red';
    private $weight = 'heavy';
    public $number;


    public function __constructor($number) {
        $this->number = $number;
        echo 'I am a NSO <br>';
        $this->goSwim();
    }

    public function goFly() {
        echo 'I am flying ' . $this->speed . '<br>';
        this->goSwim();
    }

    private function goSwim() {
        echo 'I am swiming <br>';

    }
    public function changeColor($color) {
        echo 'My color was ' .$this->color . '<br>';
        echo 'Change to ' .$color . '<br>';

        $this -> color = $color;
    }
}