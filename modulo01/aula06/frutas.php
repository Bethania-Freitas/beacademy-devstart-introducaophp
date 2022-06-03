<?php

$frutas = ["laranja" , "banana" , "goiaba" , "Morango"];

//adicionando item no array:
$frutas[] = 'Maça';

//podemos tbm indicar qual posição queremos incluir:
$frutas[8] = "Abacaxi";

var_dump($frutas);
?>

<ul>
    <li><?php echo $frutas[0]; ?></li>
    <li><?php echo $frutas[1]; ?></li>
    <li><?php echo $frutas[4]; ?></li>
    <li><?php echo $frutas[8]; ?></li>
</ul>
