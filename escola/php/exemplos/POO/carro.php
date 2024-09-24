<?php

class Carro // Abstrações do mundo real que são trazidas para o mundo da programação
{
    // public $modelo;
    private string $modelo;
    // public $marca;
    private $marca;
    // public $cor; 
    private $cor;
    // public $ano;
    private $ano;

    // Permite somente as três marcas abaixo -- A função abaixo substitui o get/set da marca carro
    function validaMarca($marca)
    {
        if ($marca == "Ford" || $marca == "Porsche" || $marca == "Ferrari") {
            $this->marca = $marca;
        } else {
            $this->marca = "Marca não permitida!";
        }
    }

    public function getCor() // Pega o valor de cor (Get the value of cor)
    {
        return $this->cor;
    }
    public function setCor($cor) // Define o valor de cor (Set the value of cor)
    {
        $this->cor = $cor;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        if ($ano >= 1970 && $ano <= 2024) {
            $this->ano = $ano;
        } else if ($ano < 1970) {
            $this->ano = "Se atualiza vovô!";
        } else {
            $this->ano = "Veio do futuro, foi???";
        }

        // return $this; -- Set apenas atribui, não retorna nada
    }
}


// Encapsulamento -> Proteger o atributo de acessos de fora da classe;
// Get e Set -> São uma convenção para, respectivamente, recuperar e definir algo (são utilizado quando não há uma regra de negócio definida);
// public -> Modificador de acesso;