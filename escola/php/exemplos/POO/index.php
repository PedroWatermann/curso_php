<?php

include_once("carro.php");


$carro = new Carro();

$carro->setModelo("GT-500");
$carro->validaMarca("Ford");
$carro->setCor("Azul Turquesa");
$carro->setAno(2020);

$carro2 = new Carro();

$carro2->setModelo("911");
$carro2->validaMarca("Porsche");
$carro2->setCor("Preto");
$carro2->setAno(2020);

$carro3 = new Carro();

$carro3->setModelo("SF90");
$carro3->validaMarca("Ferrari");
$carro3->setCor("Vermelho");
$carro3->setAno(2024);

echo "<pre>";

print_r($carro);
echo "<br>";
print_r($carro2);
echo "<br>";
print_r($carro3);

echo "</pre>";
