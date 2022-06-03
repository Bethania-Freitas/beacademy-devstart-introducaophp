<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'Bethânia'. PHP_EOL);
fwrite($arquivo, 'Alves'. PHP_EOL);
fwrite($arquivo, 'Oliveira'. PHP_EOL);

fclose($arquivo);

