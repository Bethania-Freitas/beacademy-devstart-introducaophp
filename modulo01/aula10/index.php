<?php

$notasCursoA = [
    10,
    9,
    9.5,
    7,
];

$notasCursoB = [
    8,
    9.5,
    7.5,
    9,
];

function mediaDeNotas(array $notas) : float 
{
//    $total = array_sum($notas);  //soma item por item do array
//    $quantidade = count($notas); //conta a quantidade de itens do array

 //       foreach ($notas as $cadaNota){
 //          $total += $cadaNota;
 //           $quantidade++;
//        }

    return array_sum($notas) / count($notas);
}


echo mediaDeNotas($notasCursoA);

