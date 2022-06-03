<?php

$al1 = [
    'nome' => "Chiquinho",
    'email' => "chiquinho@gmail.com",
    'telefone' =>"11 9276 82087",
    'notas' => [
         9,
         7.5,
         6,
    ]
];

$al2 = [
    'nome' => "Maria",
    'email' => "maria@gmail.com",
    'telefone' => "11 023846 82087",
    'notas' => [
       10,
      7.5,
      8.5,
    ]
];

$alunos = [
    $al1,
    $al2,
];

var_dump($alunos);
