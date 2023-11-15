 // classe que represente uma Pessoa com os seguintes atributos nome, idade e sexo. Os atributos devem ser
// privados e os valores devem ser informados via construtor.

<?php
// As classes em PHP são usadas para definir objetos e encapsular propriedades e métodos relacionados.
class Pessoa {
private $nome = "";
private $idade = 0; //private indica que essas propriedades só podem ser acessadas dentro da própria classe e não fora dela.
private $sexo = "";
 // O construtor é chamado automaticamente quando um objeto é criado a partir da classe.
public function __construct($nome, $idade, $sexo) {
$this->nome = $nome;
// $this faz referência à instância da classe atual. Ele é usado para acessar membros (propriedades e métodos)
 // da classe no interior da mesma classe.
$this->idade = $idade;
$this->sexo = $sexo;
}

// Na mesma classe, crie um método imprimir que retorne uma string no seguinte formato:
 //   Meu nome é <nome>, tenho <idade> anos e sou do sexo <sexo>.

 // Métodos públicos podem ser acessados fora da classe.
 
 public function imprimir() {
return "Meu nome é " .
$this->nome .
", tenho " .
$this->idade .
" anos e sou do sexo " .
$this->sexo .
".";
  //  concatenando os valores das propriedades com texto adicional para formar a frase desejada.
}
}
?>
