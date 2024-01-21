<?php

class Kibiras2 {
    private $akmenuKiekis = 0;
    static private $akmenuVisasKiekisKibiruose = 0;

    public function prideti1Akmeni() {
        $this=>akmenuKiekis ++;
        self::$akmenuVisasKiekisKibiruose++;
    }

    public function pridetiDaugAkmenu($kiekis) {

    }
}