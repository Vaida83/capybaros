<?php

class Bebras {

    public $spalva = 'rudas';
    public $svoris = 'nezinomas'; //dar nepasverem
    private $ugis = 1.5;

    public function  __get($prop) {
        return $this->$prop . ' kg';
        }
        
    }
    //getter'is
    public function koksSvoris() {
    return $this->svoris;
}
public function pasverti() {
    $this->svoris = rand(5, 45);
}

//setter'is
public function duotiMaisto($kg) {
    if ($kg > 5) {
        echo 'Per daug maisto';
        return;
    }
    if ($kg + $this->svoris > 45) {
        echo 'Bebras jau storas';
    }
$this->svoris = $this->svoris + $kg;
}
}