<?php

  $mensagem = $_POST['mensagem'] ?? '';
  $nome = $_POST['nome'] ?? '';

  if($mensagem == '' || $nome == ''){
    header('Location: index.php?acao=erro-campos');
  } else {
    echo "$nome enviou a mensagem $mensagem";
  }