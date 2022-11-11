<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Tratamiento</h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/OrdendesC/insertOrden') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">


                <label for="">Cliente</label>
                <select id="" name="id_Cliente" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($ordenes as $key): ?>
                    <option value="<?=$key->id_Cliente ?>"><?=$key->id_Cliente ?></option>
                    <?php endforeach?>



                </select>
            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/TratamientosC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
</div>