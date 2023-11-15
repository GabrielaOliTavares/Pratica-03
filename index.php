<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prática 03</title>
</head>

// array contendo no mínimo 5 objetos do tipo Pessoa.
// Através do foreach e do método imprimir gere para o frontend uma tag H1 contendo a string retornada.

<body>
<?php
require("pessoa.php");
$pessoas = array(
new Pessoa("Fernando", 36, "Masculino"),
new Pessoa("João", 20, "Masculino"),
new Pessoa("Larissa", 27, "Feminino"),
new Pessoa("Alice", 18, "Feminino"),
new Pessoa("José", 40, "Masculino")

);
foreach ($pessoas as $pessoa) {
echo "<h1>", $pessoa->imprimir(), "</h1>";
}
?>
</body>
</html>

// O método imprimir irá retornar somente a string sem nenhuma tag HTML, a impressão do H1 com o retorno do método deve ser feita
// dentro do foreach.