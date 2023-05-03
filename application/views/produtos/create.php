<div class="container mt-5">
    <?php echo validation_errors(); ?>

    <?php echo form_open(site_url('produtos/create')); ?>
    <div class="col-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" size="50" />
    </div>
    <div class="col-3">
    <label for="nome" class="form-label">Pre&ccedil;o</label>
    <input type="text" class="form-control" name="preco" id="preco" size="50" />
    </div>
    <div><input type="submit" class="btn btn-primary mt-2" value="Criar" /></div>

    </form>
</div>