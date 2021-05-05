<?php

class Pessoa {

    public $nome;//Atributo

    public function falar() {//Método

        return "O meu nome é ".$this->nome;
    
    }

}

$matheus = new Pessoa();
$matheus->nome = "Matheus Jankovski";
echo $matheus->falar();

?>