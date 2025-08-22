// Ex 2
<?php
function makeMedia($num1, $num2, $num3) {
  $media = ($num1 + $num2 + $num3) / 3;

  if ($media >= 7) {
    return " Aluno APROVADO com média: " .$media;
  } else if ($media < 4){
    return " Aluno REPROVADO com média: " .$media;
  } else {
    return " Aluno ficou para PROVA FINAL: " .$media;
  }
}
echo $resultMedia = makeMedia(6,1,2);
?>

// Ex 3
<?php
  function calcularIMC($altura, $sexo) {
    $media = 0;

    switch ($sexo) {
      case 'Masculino':
        $media = (72.7 * $altura) - 58;
        return "Resultado : " .$media;
        break;
      case 'Feminino':
        $media = (62.1 * $altura) - 44.7;
        return "Resultado: " .$media;
        break;
    }
  }

  echo $resultadoIMC = calcularIMC(1.80, 'Masculino');
  echo $resultadoIMC = calcularIMC(1.55, 'Feminino');
?>

