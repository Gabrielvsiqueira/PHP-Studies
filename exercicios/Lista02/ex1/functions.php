<?php

  function maiorValor($array){
    //$array.sort($array).max($array);
    return  max($array);
  }

  function menorValor($array) {
    //$array.rsort($array);
    return min($array);
  }

  function elementosArray($array) {
    //$array.strlen($array);
    return count($array);
  }

  function buscarValor($array, $indexNumber) {
    if ($array == $indexNumber) {
      return true;
    } else {
      return false;
    }
  }
?>