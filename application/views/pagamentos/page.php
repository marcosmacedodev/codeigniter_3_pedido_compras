<div class="container mt-5">

<table class="table">

<thead>
    <tr>
        <th scope="col">Pedido id</th>
        <th scope="col">Estado id</th>
    </tr>
</thead>

<tbody>

    <?php foreach($pagamentos as $pagamento){ ?>
    <tr>
        <td><?php echo $pagamento['pedido_id']; ?></td>
        <td><?php echo $pagamento['estado']; ?></td>
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