<?php
require_once('tabela.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela do Brasileirão</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px; font-family: sans-serif; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; vertical-align: middle; }
        th { background-color: #f2f2f2; }
        img { height: 25px; vertical-align: middle; margin-right: 5px; }
    </style>
</head>
<body>
    <h1>Tabela do Brasileirão</h1>
    <table>
        <thead>
            <tr>
                <th>Posição</th>
                <th>Brasão</th>
                <th>Time</th>
                <th>Pontos</th>
                <th>Jogos</th>
                <th>Vitórias</th>
                <th>Empates</th>
                <th>Derrotas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Itera sobre o array de classificação
            foreach ($classificacao as $dados) {
                // Pega o ID do time a partir do array de classificação
                $time_id = $dados['time_id'];
                
                // Usa o ID para encontrar as informações do time no array $equipes
                // A função `array_key_exists` garante que o time_id existe
                if (array_key_exists($time_id, $equipes)) {
                    $equipe = $equipes[$time_id];
                } else {
                    // Caso o time não seja encontrado, define valores padrão
                    $equipe = ['nome-comum' => 'Time Não Encontrado', 'brasao' => ''];
                }

                echo "<tr>";
                echo "<td>" . $dados['posicao'] . "</td>"; // Pega a posição diretamente do array $classificacao
                echo "<td><img src='" . $equipe['brasao'] . "' alt='Brasão do time'></td>"; // Exibe o brasão
                echo "<td>" . $equipe['nome-comum'] . "</td>"; // Exibe o nome do time
                echo "<td>" . $dados['pontos'] . "</td>";
                echo "<td>" . $dados['jogos'] . "</td>";
                echo "<td>" . $dados['vitorias'] . "</td>";
                echo "<td>" . $dados['empates'] . "</td>";
                echo "<td>" . $dados['derrotas'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>