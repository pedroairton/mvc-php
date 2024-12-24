<section class="page-delete">
    <div class="container">
        <h2>Deseja deletar esse registro?</h2>
        <a class="y" href="?router=Site/deletar/&id=<?=$id?>">Sim </a>
        <a class="n" href="?router=Site/consulta"> Não</a>
    </div>
</section>

<style>
a.y{
    color: red;
    font-size: 1.5rem;
    margin-right: 1rem;
}
a.n{
    font-size: 1.5rem;
}
</style>