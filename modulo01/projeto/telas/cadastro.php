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


<h1>Pagina de Cadastro</h1>
<hr>

<form action="" method="post">

    <input type="text" placeholder="Digite seu Nome" required>
    
    <input type="text" placeholder="Digite seu Email" required>
    
    <input type="tel" placeholder="Digite seu Telefone"
        pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}"
        required>
        
    <br>
    <button>Enviar</button>
</form>