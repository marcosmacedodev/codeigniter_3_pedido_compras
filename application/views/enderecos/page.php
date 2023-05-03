<div class="container mt-5">

<table class="table">

<thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Logradouro</th>
        <th scope="col">N&uacute;mero</th>
        <th scope="col">Complemento</th>
        <th scope="col">Bairro</th>
        <th scope="col">CEP</th>
        <th scope="col">Cidade id</th>
        <th scope="col">Cliente id</th>
    </tr>
</thead>

<tbody>

    <?php foreach($enderecos as $endereco){ ?>
    <tr>
        <td><?php echo $endereco['id']; ?></td>
        <td><?php echo $endereco['logradouro']; ?></td>
        <td><?php echo $endereco['numero']; ?></td>
        <td><?php echo $endereco['complemento']; ?></td>
        <td><?php echo $endereco['bairro']; ?></td>
        <td><?php echo $endereco['cep']; ?></td>
        <td><?php echo $endereco['cidade_id']; ?></td>
        <td><?php echo $endereco['cliente_id']; ?></td>
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