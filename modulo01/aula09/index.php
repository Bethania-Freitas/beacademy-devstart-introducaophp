
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            
            font-family: Georgia, 'Times New Roman', Times, serif;
            
        }
    </style>    
</head>
<body>
    <div class="container">
        <table class="table table-hover table-striped mt-5" >
            <?php

            $url = $_SERVER['REQUEST_URI'];
            
            include 'telas/menu.php';
            include 'acoes.php';

            match ($url) {
                '/' => home(),
                '/cadastro' => cadastro(),
                '/login' => login(),
                '/listar' => listar(),
                '/relatorio' => relatorio(),
                default => admin(),
            }

            ?>
        </table>    
    </div>
</body>
</html>
