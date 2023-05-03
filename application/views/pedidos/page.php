<div class="container mt-5">

<table class="table">

<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Data pedido</th>
        <th scope="col">Cliente id</th>
        <th scope="col">Endere&ccedil;o id</th>
    </tr>
</thead>

<tbody>

    <?php foreach($pedidos as $pedido){ ?>
    <tr>
        <td><?php echo $pedido['id']; ?></td>
        <td><?php echo date_format(date_create($pedido['instante']), "d/m/Y H:i:s"); ?></td>
        <td><?php echo $pedido['cliente_id']; ?></td>
        <td><?php echo $pedido['endereco_de_entrega_id']; ?></td>
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