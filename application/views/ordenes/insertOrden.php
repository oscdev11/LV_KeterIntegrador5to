<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nueva Orden de Producción</h5></div>
    <br>
</div>

<div class="container">
   

    <form action="<?=base_url('index.php/OrdenesC/insertOrden') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">


               <input type="hidden" name="prueba" >

                <select  hidden="hidden" name="id_Planta" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($plantaId as $key): ?>
                    <option value="<?=$key->id_Planta ?>"><?=$key->nombre ?></option>
                    <?php endforeach?>
                </select>

           




                <label for="">Razón social</label>
                <select id="" name="id_Cliente" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($clientesRazonId as $key): ?>
                    <option value="<?=$key->id_Cliente ?>"><?=$key->razonSocial ?></option>
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
                <select name="estado" class="form-select shadow p-1 mb-2 bg-body rounded">
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
        <a class="btn btn-danger" href="<?=base_url('index.php/OrdenesC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
</div>
<br><br>



<?php print_r($plantaId) ?>
    <?php print_r($clientesRazonId) ?>
    <?php echo validation_errors(); ?>