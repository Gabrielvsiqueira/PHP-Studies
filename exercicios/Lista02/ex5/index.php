// Ex 5
<?php
echo "<br>";

$vendas = [
  "Vendedor 1" => [10.00, 35.00, 12.00, 45.50],
  "Vendedor 2" => [20.00, 55.00, 124.00, 50.00],
  "Vendedor 3" => [30.00, 5.00, 123.00, 90.00],
  "Vendedor 4" => [60.00, 15.00, 125.00, 100]
];

$totalVendasSemana = [];
$totalVendasMes = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendas funcionarios</title>
</head>
<body>
  <h1> Relatório de Vendas</h1>

  <h2>Total de vendas de cada vendedor</h2>
  <p>
    <?php 
      foreach ($vendas as $vendedor => $semanas){
        $totalVendedor = array_sum($semanas);
        $totalVendasMes += $totalVendedor;
        echo "<li>$vendedor: R$ " . $totalVendedor, "</li>";
      }
    ?>
  </p>

  <h2>Total de vendas de cada semana</h2>
  <form action="">
    <table>
        <thead>
            <tr>
                <th>Semana 1</th>
                <th>Semana 2</th>
                <th>Semana 3</th>
                <th>Semana 4</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                for ($semana = 0; $semana < 4; $semana++) {
                    $totalSemana = 0;
                    foreach ($vendas as $vendedor => $vendasSemana) {
                        $totalSemana += $vendasSemana[$semana];
                    }
                    echo "<td>R$ " . number_format($totalSemana, 2, ',', '.') . "</td>";
                }
                ?>
            </tr>
        </tbody>
    </table>
  </form>

  <h2>Total de vendas de toda empresa</h2>

  <p> Total de vendas desse mês foi : <?php echo $totalVendasMes?></p>
</body>
</html>