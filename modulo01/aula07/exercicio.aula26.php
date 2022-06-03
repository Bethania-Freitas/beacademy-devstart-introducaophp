<?php


$produto1 = [
    'nome' => 'saia',
    'preco' => 49,90,
    'descricao' => 'saia preta, estudante, plisada',
    'foto' => "<img width='100px' src= saia.jpg >",
];

$produto2 = [
    'nome' => 'calça',
    'preco' => 99,90,
    'descricao' => 'calça jeans, Jogger, rasgada',
    'foto' => "<img width='100px' src=calca.jpg>",
 
];

$produto3 = [
    'nome' => 'camiseta',
    'preco' => 49,90,
    'descricao' => 'camiseta preta lisa',
    'foto' => "<img width='100px' src=camiseta.jpg>",
];

$produto4 = [
    'nome' => 'oculos',
    'preco' => 69,90,
    'descricao' => 'oculos hipe colorido',
    'foto' => "<img width='100px' src=oculos.jpg>",
];

$produto5 = [
    'nome' => 'vestido',
    'preco' => 129,90,
    'descricao' => 'vestido preto acinturado',
    'foto' => "<img width='100px' src=vestido.jpg>",
];

$Compra = [
    $produto1,
    $produto2,
    $produto3,
    $produto4,
    $produto5,
];
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class= 'mt-5'>Carrinho de compras:</h1>
    <hr>
    <table class="table table-hover table-striped mt-5" >
        <thead class="table-dark" align="center">
            <tr>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Imagem</th>
                              
        </thead>
        <tbody align="center" > 
            <?php
                foreach ( $Compra as $CadaCompra ) {
                    echo "<tr>";
                        echo '<td>' . $CadaCompra['nome'] . "</td>";
                        echo '<td>' . $CadaCompra['descricao'] . "</td>";
                        echo '<td>' . $CadaCompra['preco'] . "</td>";
                        echo '<td>' . $CadaCompra['foto'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
