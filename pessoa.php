\\ classe que represente uma Pessoa com os seguintes atributos nome, idade e sexo. Os atributos devem ser
\\ privados e os valores devem ser informados via construtor.

<?php
class Pessoa {
private $nome = "";
private $idade = 0;
private $sexo = "";
public function __construct($nome, $idade, $sexo) {
$this->nome = $nome;

$this->idade = $idade;
$this->sexo = $sexo;
}
public function imprimir() {
return "Meu nome é " .
$this->nome .
", tenho " .
$this->idade .
" anos e sou do sexo " .
$this->sexo .
".";
}
}
?>
