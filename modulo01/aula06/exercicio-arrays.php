<?php

$cores = ["Preto", "Branco", "Azul", "Vermelho", "Verde"];

?>

<ul>
    <?php
        for ($cont = 0; $cont <= 4; $cont++){
            echo "<li>" . $cores[$cont] . "</li>";
        }
    ?>      
</ul>


