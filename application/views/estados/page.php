<div class="container mt-5">

<table class="table">

<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
    </tr>
</thead>

<tbody>

    <?php foreach($estados as $estado){ ?>
    <tr>
        <td><?php echo $estado['id']; ?></td>
        <td><?php echo $estado['nome']; ?></td>
        <td><a href="<?php echo site_url('estados/delete/' . $estado['id']) ?>">Excluir</a> | <a href="<?php echo site_url('estados/update/' . $estado['id']) ?>">Atualizar</a></td>
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