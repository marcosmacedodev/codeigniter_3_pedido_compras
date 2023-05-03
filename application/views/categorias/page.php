<div class="container mt-5">
<a href="<?php echo site_url('categorias/create'); ?>" class="btn btn-secondary mb-5">Criar categoria</a>
<table class="table">

<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
    </tr>
</thead>

<tbody>

    <?php foreach($categorias as $categoria){ ?>
    <tr>
        <td><?php echo $categoria['id']; ?></td>
        <td><?php echo $categoria['nome']; ?></td>
        <td><a href="<?php echo site_url('categorias/delete/' . $categoria['id']) ?>">Excluir</a> | <a href="<?php echo site_url('categorias/associar/' . $categoria['id']) ?>">Associar</a></td>
    </tr>
    <?php } ?>

</tbody>

</table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php echo $paginacao; ?>
        </ul>
    </nav>
</div>