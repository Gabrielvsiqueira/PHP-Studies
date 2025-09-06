<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>

<body>
  <?php
    $acao = $_GET['acao'] ?? 'index';

    if($acao == 'erro-campos'){
      echo 'Preencha todos os campos';
    }

    if($acao == 'cadastrar'){
      require('controllers/feedback-store.controller.php');
    } else {
    require('controllers/feedback-create.controller.php');

    }
  ?>
</body>

</html>  