<style>
    input{
        height: 3rem;
        width: 50%;
        margin: 12px 0;
        border-radius: 1rem;
        padding: 0.4rem;
        background: #FFDAB9;
        resize: none;
        color:aliceblue
    }

</style>


<h1>Editar Cadastro</h1>
<hr>

<form action="" method="post">

    <input value ="<?php echo $dados[0]; ?>" name='nome' type="text" placeholder="Digite seu Nome" required>
    
    <input value ="<?php echo $dados[1]; ?>" name='email' type="text" placeholder="Digite seu Email" required>
    
    <input value ="<?php echo $dados[2]; ?>" name= 'telefone' type="tel" placeholder="Digite seu Telefone"
        required>
        
    <br>
    <button>Enviar</button>
</form>