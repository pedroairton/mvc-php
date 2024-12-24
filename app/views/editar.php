<section class="page-editar">
    <div class="container form-cadastro">
        <h2>Edição de Registros</h2>
        <div>
            <form action="?router=Site/alterar" method="POST">
                <?php foreach ($editar as $reg): ?>
                    <input type="hidden" name="id" value="<?= $reg['id'] ?>">
                    <input type="text" name="nome" id="nome" value="<?= $reg['nome'] ?>" placeholder="Nome" required>
                    <input type="email" name="email" id="email" value="<?= $reg['email'] ?>" placeholder="Email" required>
                    <!-- <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required> -->
                    <input type="submit" value="Atualizar" class="btn-small green">
                    <input type="reset" value="Limpar" class="btn-small red">
                <?php endforeach ?>
            </form>
        </div>
    </div>
</section>

<style>
    .form-cadastro {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        align-items: center;
    }
</style>