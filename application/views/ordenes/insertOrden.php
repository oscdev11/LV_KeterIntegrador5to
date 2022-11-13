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


               
                <select hidden="hidden" id="" name="id_Planta" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($plantaId as $key): ?>
                    <option value="<?=$key->id_Planta ?>"><?=$key->id_Planta ?></option>
                    <?php endforeach?>
                </select>

                <select hidden="hidden" id="" name="id_Cliente" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($clienteId as $key): ?>
                    <option value="<?=$key->id_Cliente ?>"><?=$key->id_Cliente ?></option>
                    <?php endforeach?>
                </select>




                <label for="">Razón social</label>
                <select id="" name="razonSocial" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($clientesRazon as $key): ?>
                    <option value="<?=$key->razonSocial ?>"><?=$key->razonSocial ?></option>
                    <?php endforeach?>
                </select>



                <label for="">Fecha de captura: </label>
                <input type="date" class="form-control shadow p-1 mb-3 bg-body rounded" name="fechaCaptura">

                <label for="">Fecha de entrega: </label>
                <input type="date" class="form-control shadow p-1 mb-3 bg-body rounded" name="fechaEntrega">

                <label for="">Domicilio de entrega: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="domicilioEnvio">

                <label for="">Comentarios: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="comentarios">


               <label for="">Estado: </label>
                <select name="estado" id="" class="form-select shadow p-1 mb-2 bg-body rounded">
                    <option value="En espera">En espera</option>
                    <option value="En proceso">En proceso</option>
                    <option value="Terminado">Terminado</option>
                </select>

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