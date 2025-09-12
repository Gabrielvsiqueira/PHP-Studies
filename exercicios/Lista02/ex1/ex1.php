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