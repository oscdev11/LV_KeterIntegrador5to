<div class="container-fluid">
    <form action="<?=base_url('index.php/PlantaC/updatePlanta/').$planta[0]->id_Planta ?>" method="POST">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Editar planta: <?=$planta[0]->nombre ?></h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Planta: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre" value="<?=$planta[0]->nombre ?>">
                <label for="">Alias: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="alias" value="<?=$planta[0]->alias ?>">
                <label for="">Teléfono: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="telefono" value="<?=$planta[0]->telefono ?>">
                <label for="">Domicilio: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="domicilio" value="<?=$planta[0]->domicilio ?>">
            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/PlantaC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit" value="Guardar">
        
    </div>
    
    </form>
    
</div>