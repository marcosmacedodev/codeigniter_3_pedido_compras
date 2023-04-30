<div class="container mt-5">

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