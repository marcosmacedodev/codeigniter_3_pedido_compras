<div class="container mt-5">
    <?php echo validation_errors(); ?>

    <?php echo form_open(site_url('categorias/create')); ?>
        <div class="row">
            <div class="col-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" size="50" />
            </div>
        </div>
        <input type="submit" class="btn btn-primary mt-2" value="Criar" />
    </form>
</div>