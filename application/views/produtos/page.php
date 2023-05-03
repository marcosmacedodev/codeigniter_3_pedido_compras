<div class="container mt-5">
<a href="<?php echo site_url('produtos/create'); ?>" class="btn btn-secondary mb-5">Criar produto</a>
<table class="table">

<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Pre&ccedil;o</th>
    </tr>
</thead>

<tbody>

    <?php foreach($produtos as $produto){ ?>
    <tr>
        <td><?php echo $produto['id']; ?></td>
        <td><?php echo $produto['nome']; ?></td>
        <td><?php echo $produto['preco']; ?></td>
        <td><a href="<?php echo site_url('produtos/delete/' . $produto['id']) ?>">Excluir</a> | <a href="<?php echo site_url('produtos/update/' . $produto['id']) ?>">Editar</a></td>
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