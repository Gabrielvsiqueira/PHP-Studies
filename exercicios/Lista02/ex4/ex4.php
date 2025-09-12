// Ex 4

<?php
echo "<br>";
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
  echo "<br>";
?>