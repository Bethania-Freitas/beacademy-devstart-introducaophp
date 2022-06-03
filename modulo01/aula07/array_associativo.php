<?php

//array associativo

$dados =[
    'nome' =>   'Chiquinho',
    'sobrenome' => 'da Silva',
    'cidade' => 'Fortaleza',
    'idade' => 34,
    'ano_formacao' => 2001,
    'cor' => 'azul',
];

echo 'Nome: ' . $dados['nome'] . "<br>";
echo 'Cidade: ' . $dados['cidade'] . "<br>";
echo 'Idade: ' . $dados['idade'] . "<br>";

var_dump($dados);