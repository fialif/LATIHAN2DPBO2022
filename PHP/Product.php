<?php

class Product{
    private $idProduct;
    private $price;

    public function __construct($id = "", $p = 0){
        $this->idProduct = $id;
        $this->price = $p;
    }

    public function setIDProduct($id){
        $this->idProduct = $id;
    }

    public function getIDProduct(){
        return $this->idProduct;
    }
    
    public function setPrice($p){
        $this->price = $p;
    }

    public function getPrice(){
        return $this->price;
    }
}
?>