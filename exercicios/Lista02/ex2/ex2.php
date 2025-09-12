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