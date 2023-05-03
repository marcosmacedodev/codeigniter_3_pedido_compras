<div class="container mt-5">
    <?php echo validation_errors(); ?>
    
    <div class="col-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" size="50" value="<?php echo $categoria['nome']; ?>" disabled />
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Produto id</th>
                <th scope="col">Categoria id<th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($prodsassoc as $prodassoc){ ?>
        <tr>
            <td><?php echo $prodassoc['produto_id']; ?></td>
            <td><?php echo $prodassoc['categoria_id']; ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
        <?php echo form_open(site_url('categorias/associar/' . $categoria['id'])); ?>
        <div class="row">
            <div class="col-3">
                <select name="produto_id" class="form-control">
                    
                    <?php foreach($produtos as $produto){ ?>
                        <option value="<?php echo $produto["id"]; ?>"><?php echo $produto['nome'];?></option>                   
                    <?php } ?>
                    <option value="" selected>Selecione um produto</option>
                </select>
                <input type="submit" class="btn btn-primary mt-2" value="Associar" />
            </div>
            <div class="col-1">
                
            </div>
        </div>
    </form>
</div>