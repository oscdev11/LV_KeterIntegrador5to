<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Departamento</h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/DepartamentosC/insertDepartamento') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <select name="id_Planta" id="" hidden="hidden">
                    <?php foreach ($planta as $key): ?>
                        <option value="<?=$key->id_Planta ?>"><?=$key->id_Planta ?></option>
                    <?php endforeach ?>
                </select>
                <label for="">Nombre del departamento: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre">
            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/DepartamentosC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
</div><br><br>