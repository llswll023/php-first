<?php
/*
  function registerUser($name) {
    echo $name . 'registerd';
  }

  registerUser('Brad');

  function sum($n1, $n2){
    return $n1+$n2;
  }

  echo sum(5, 5);
*/

//special form function

  $subtract = function($n1, $n2){
    return $n2-$n1;
  };

  echo $subtract(5, 10);

  $multiply = fn($n1, $n2) => $n2*$n1;

  echo $multiply(5, 10);

