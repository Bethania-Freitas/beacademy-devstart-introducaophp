<?php

$idade = 17;


// forma mais resumidade usar um IF.   É mandar pergunta:  Idade é maior ou iguala 18?  Se sim esreve maior de idade, se não escreve menor de idade:

echo $idade >= 18 ? "maior de idade" : "menor de idade";


//Outra opção é usar o isset (is set - esta presente).  O nome foi definido?  Se sim, escreve o nome, se não, escreve não definido

echo isset($nome) ? $nome : "nome não definido";


// Outra opção é usar a interrogação dupla, ele já entende que se tiver o nome é pra imprimir o nome, se não tive é pra escrever que o nome não foi definido.

echo $nome ?? "nome não definido";

