<div class="container mt-5">

<table class="table">

<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">CPF ou CNPJ</th>
        <th scope="col">Tipo</th>
    </tr>
</thead>

<tbody>

    <?php foreach($clientes as $cliente){ ?>
    <tr>
        <td><?php echo $cliente['id']; ?></td>
        <td><?php echo $cliente['nome']; ?></td>
        <td><?php echo $cliente['email']; ?></td>
        <td><?php echo $cliente['cpfou_cnpj']; ?></td>
        <td><?php echo $cliente['tipo']; ?></td>
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