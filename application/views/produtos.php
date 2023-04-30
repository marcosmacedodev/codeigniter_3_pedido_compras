<div class="container mt-5">

<table class="table">

<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">preco</th>
    </tr>
</thead>

<tbody>

    <?php foreach($produtos as $produto){ ?>
    <tr>
        <td><?php echo $produto['id']; ?></td>
        <td><?php echo $produto['nome']; ?></td>
        <td><?php echo $produto['preco']; ?></td>
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