<section class="page-consultas">
    <div class="container">
        <h1>Consultas</h1>
        <div class="consultas">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($consulta as $reg): ?>
                        <tr class="consulta">
                            <td>Nome: <?= $reg['nome'] ?></td>
                            <td>Email: <?= $reg['email'] ?></td>
                            <td>
                                <a href="?router=Site/editar/&id=<?=$reg['id']?>">Editar</a> |
                                <a href="?router=Site/delete/&id=<?=$reg['id']?>">Deletar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>