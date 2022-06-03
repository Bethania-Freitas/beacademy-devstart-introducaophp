<form action="" method="post">
    <input name="nome" placeholder="nome"><br>
    <input name="cidade" placeholder="cidade"><br/>

    <button>Enviar</button>
</form>

<?php
    if($_POST) {
        echo "OI " .$_POST['nome'];
    }
?>