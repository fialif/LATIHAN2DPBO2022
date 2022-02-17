<?php

include "Memory.php";

$brg = new Memory("100511", 200, "VGen", "RAM", "2.00 MHz", "4 GB", "Yes");
$brg->setIDProduct("100511");
$brg->setPrice(200000);
$brg->setModel("RAM");

echo "ID : ". $brg->getIDProduct() ."<br>";
echo "Price         : ". $brg->getPrice(). "<br>";
echo "Brand         : ". $brg->getBrand(). "<br>";
echo "Model         :	". $brg->getModel() ."<br>";
echo "Frequency     :	".$brg->getFrequency()."<br>";
echo "Memory Size   : ".$brg->getMemorySize()."<br>";
echo "Supports Cuda : ".$brg->getSupportsCuda()."<br>";

?>