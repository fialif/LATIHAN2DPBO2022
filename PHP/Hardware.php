<?php

include "Product.php";

class Hardware extends Product{
    private $brand = "VGen";
    private $model;

    public function __construct($id, $p, $b, $m){
        $this->brand = $b;
        $this->model = $m;
        $this->setIDProduct($id);
        $this->price = $p;
    }

    public function setBrand($b){
        $this->brand = $b;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function setModel($m){
        $this->model = $m;
    }

    public function getModel(){
        return $this->model;
    }
}

?>