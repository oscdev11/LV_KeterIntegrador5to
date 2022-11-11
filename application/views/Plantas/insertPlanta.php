<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar nueva Planta</h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/PlantaC/insertPlanta') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <select hidden="hidden" id="" name="id_UserAdmin" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($administradores as $key): ?>
                    <option value="<?=$key->id_UserAdmin ?>"><?=$key->id_UserAdmin ?></option>
                    <?php endforeach?>
                </select>
                <label for="">Planta: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre">
                <label for="">Alias: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="alias">
                <label for="">Teléfono: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="telefono">
                <label for="">Domicilio: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="domicilio">
            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/PlantaC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
    
</div>