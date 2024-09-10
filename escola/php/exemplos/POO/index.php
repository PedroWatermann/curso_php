<?php 

class Carro
{
    public $modelo = "GT-500";
    public $marca = "Ford";
    public $cor = "Preto";
    public $ano = 2018;

    public function exibir() {
        $carro = new Carro();

        echo "Modelo: ". $carro -> modelo;
        echo "Marca: ". $carro -> marca;
        echo "Cor: ". $carro -> cor;
        echo "Ano: ". $carro -> ano;
    }
}