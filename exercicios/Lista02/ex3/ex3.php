//Ex 3

<?php
echo "<br>";
$string_dados = "Stark#Bran, Arya, Tony#Wolf";

$partes = explode('#', $string_dados); //quebra a string usando a função explore(delimitador,string)
$nomes = explode(',', $partes[1]); //$partes[1] é onde está os nomes dentro do array partes.
$nomes = array_map('trim', $nomes); // vai tirar os espaços dos nomes;

$resultado = [
  'Family' => $partes[0],
  'Pet' => $partes[2],
  'Members' => $nomes
];

print_r($resultado);

echo "<br>";
?>