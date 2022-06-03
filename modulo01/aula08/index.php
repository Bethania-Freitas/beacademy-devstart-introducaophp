<?php

$url = $_SERVER['REQUEST_URI'];

if ($url === '/'){
    echo "<h1>Pagina Inicial</h1>";
} elseif ($url === '/login') {
    echo "<h1>Pagina de Login</h1>";
} elseif ($url === '/cadastro') {
    echo "<h1>Pagina de Cadastro</h1>";
} else {
    echo "<h1>Pagina não encontrada</h1>";
}
