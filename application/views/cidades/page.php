<div class="container mt-5">

<table class="table">

<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Estado id</th>
    </tr>
</thead>

<tbody>

    <?php foreach($cidades as $cidade){ ?>
    <tr>
        <td><?php echo $cidade['id']; ?></td>
        <td><?php echo $cidade['nome']; ?></td>
        <td><?php echo $cidade['estado_id']; ?></td>
        <td><a href="<?php echo site_url('cidades/delete/' . $cidade['id']) ?>">Excluir</a> | <a href="<?php echo site_url('cidades/update/' . $cidade['id']) ?>">Atualizar</a></td>
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