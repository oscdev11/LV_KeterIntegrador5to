<div class="container">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Químico</h5></div>
<br>

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/QuimicosC/insertQuimico') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Nombre: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre">

                <label for="">Fabricante: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="fabricante">
        
                <label for="">Descripción: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="descripcion">

                <label for="">Cantidad en mililitros: </label>
                <input type="number" class="form-control shadow p-1 mb-2 bg-body rounded" name="cantidadDisponible" min="1">

            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/QuimicosC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
</div>