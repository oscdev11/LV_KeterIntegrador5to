<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Material</h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/MaterialesC/insertMaterial') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Nombre: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre">

                <label for="">Fabricante: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="fabricante">
        
                <label for="">Tipo: </label>
                <select name="tipo" id="" class="form-select shadow p-1 mb-2 bg-body rounded">
                    <option value="Natural">Natural</option>
                    <option value="Sintético">Sintético</option>
                </select>
        
                <label for="">Descripción: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="descripcion">

                <label for="">Cantidad disponible en kg: </label>
                <input type="number" class="form-control shadow p-1 mb-2 bg-body rounded" name="cantidadDisponible" min="1">

            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/MaterialesC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
</div> <br><br>