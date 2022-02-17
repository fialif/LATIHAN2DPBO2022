<?php

include "Hardware.php";
class Memory extends Hardware{
    private $frequency;
    private $memorySize;
    private $supportsCuda;

    public function __construct($id, $p, $b, $m, $f, $ms, $s){
        $this->frequency = $f;
        $this->memorySize = $ms;
        $this->supportsCuda = $s;
        $this->brand = $b; // kaga masuk
        $this->model = $m; // kaga masuk
        $this->idProduct = $id;
        $this->price = $p; // kaga masuk
    }

    public function setFrequency($f){
        $this->frequency = $f;
    }

    public function getFrequency(){
        return $this->frequency;
    }

    public function setMemorySize($ms){
        $this->memorySize = $ms;
    }

    public function getMemorySize(){
        return $this->memorySize;
    }

    public function setSupportsCuda($s){
        $this->supportsCuda = $s;
    }

    public function getSupportsCuda(){
        return $this->supportsCuda;
    }

}

?>