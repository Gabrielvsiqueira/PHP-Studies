//Ex 1
<?php
echo "<br>";
  require('functions.php');
  $opcao;
  $numeros = [1,2,5,6,8,10,12,15];

  print_r($numeros);

  echo "Maior valor = " . maiorValor($numeros) . "<br>";
  echo "Menor valor =  " . menorValor($numeros) . "<br>";
  echo "Total de elementos = " .elementosArray($numeros). "<br>";
  echo buscarValor($numeros, 10);
  echo "<br>";
?>

//Ex 2
<?php
echo "<br>";
$resultado = [0,0,0,0,0,1];

function checaResultado($resultado, $valor){
  $contador = 0;

  for($i = 0; $i < count($resultado); $i++){
    if($resultado[$i] == $valor){
        $contador++;
    }
  }
  return $contador++;
}

$adao = checaResultado($resultado, 1);
$eva = checaResultado($resultado, 0);

echo "Adão ganhou $adao vezes <br>";
echo "Eva ganhou $eva vezes";

echo "<br>";
?>

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


// Ex 4
<?php
  $matriz =[
    [1,2,3],
    [4,5,6],
    [7,8,9]
  ];

  for($linha = 0; $linha < sizeof($matriz); $linha++){
    echo '<br>';
    for($coluna = 0; $coluna < sizeof($matriz[$linha]); $coluna++){
      echo $matriz[$linha][$coluna].'|';
      echo $matriz[$coluna][$linha].'|';
    }
  }
?>