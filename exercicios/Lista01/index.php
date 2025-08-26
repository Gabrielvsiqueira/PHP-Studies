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

//Ex 4
<?php
  echo '<h1> Olá mundo!</h1>'
?>

// Ex 5
<?php
  $link = 'http://www.utfpr.edu.br';
  $titulo = 'UTFPR';

  echo "<a href='$link'>$titulo</a>";
?>

//Ex 6

// Vai imprimir na tela o valor de "Text na variável $campo"
<html>
<?php 
  $titulo = "Minha pagina";
  $campo = "text";
  $value = "um formulário";
?>
<head>
  <title><?php echo $titulo?></title>
</head>
<body>
  <p>Campo para um texto:</p>
  <input type="<?= $campo ?>" value="<?= $value ?>">
</body>
</html>