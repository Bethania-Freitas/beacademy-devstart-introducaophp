
<?php
    
$calca = "Calça";
$precoCalca = 65.99;
$tamanhoCalca = "40";

$camisa = "Camisa";
$precoCamisa = 49.90;
$tamanhoCamisa = "M";

$sapato = "Sapato";
$precoSapato = 75.00;
$tamanhoSapato = "35";

$total = $precoCalca + $precoCamisa + $precoSapato;
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12</title>

    <style>
        section#tabela {
            font-size: 1.3rem;
            text-align-last: center;

        }
    </style>
</head>
<body>
    <section id="tabela">
        <table border='1px'>

                <thead>
                    <tr bgcolor="#C4FCEF">
                        <th>Produto</th>
                        <th>Tamanho</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $camisa; ?></td>
                        <td><?php echo $tamanhoCalca; ?></td>
                        <td><?php echo $precoCalca; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $calca; ?></td>
                        <td><?php echo $tamanhoCamisa; ?></td>
                        <td><?php echo $precoCamisa; ?></td>
                    </tr>

                    <tr>
                        <td><?php echo $sapato; ?></td>
                        <td><?php echo $tamanhoSapato; ?></td>
                        <td><?php echo $precoSapato; ?></td>
                    </tr>
                    <tr>
                        <th><?php echo "TOTAL:" ?></th>
                        <td></td>
                        <th><?php echo $total; ?></th>
                    </tr>
                </tbody>
        </table>  
    </section>  
</body>


</html>










    