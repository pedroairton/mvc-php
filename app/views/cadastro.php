<section class="page-cadastro">
    <div class="container form-cadastro">
        <h1>Cadastro</h1>
        <form action="?router=Site/cadastro" method="POST">
            <input type="text" name="nome" id="nome" placeholder="Nome" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <!-- <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required> -->
            <input type="submit" value="Cadastrar" class="btn-small green">
            <input type="reset" value="Limpar" class="btn-small red">
        </form>
    </div>
</section>

<style>
    .form-cadastro{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        align-items: center;
    }
</style>

<!-- <script>
    document.querySelector('form').addEventListener('submit', function(e){
        e.preventDefault();
        window.alert('Cadastro realizado com sucesso!');
        const nome = document.querySelector('#nome').value;
        const email = document.querySelector('#email').value;
        // const telefone = document.querySelector('#telefone').value;
        fetch('?router=Site/cadastro', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: `nome=${nome}&email=${email}`
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
        })
        .catch(error => {
            console.error(error);
        });
    });
</script> -->