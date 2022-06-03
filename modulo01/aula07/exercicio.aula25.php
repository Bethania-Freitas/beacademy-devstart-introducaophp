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

$al3 = [
    'nome' => "José",
    'email' => "jose@gmail.com",
    'telefone' => "11 023846 82237",
    'notas' => [
       10,
      7.5,
      8.5,
    ]
];

$al4 = [
    'nome' => "Zezim",
    'email' => "zezim@gmail.com",
    'telefone' => "11 3667 82087",
    'notas' => [
       10,
      7.5,
      8.5,
    ]
];

$alunos = [
    $al1,
    $al2,
    $al3,
    $al4,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class= 'mt-5'>Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
        </thead>
        <tbody>
            <?php
                foreach ( $alunos as $CadaAluno ) {
                    echo "<tr>";
                        echo '<td>' . $CadaAluno['nome'] . "</td>";
                        echo '<td>' . $CadaAluno['email'] . "</td>";
                        echo '<td>' . $CadaAluno['telefone'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
