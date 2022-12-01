<!-- FORMULARIO PARA CREAR UN NUEVO PUESTO -->

<!-- NO SIRVEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE -->

<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Material </h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/PedidoMaterialesC/insertPedidoMaterial') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">

                <label for="">Pedido: </label>
                <select id="" name="id_Pedido" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($pedidos as $key): ?>
                    <option value="<?=$key->id_Pedido ?>"> <?=$key->id_Pedido ?></option>
                    <?php endforeach?>
                </select>

                <label for="">Material: </label>
                <select id="" name="id_Material" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($materiales as $key): ?>
                    <option value="<?=$key->id_Material ?>"> <?=$key->nombre ?></option>
                    <?php endforeach?>
                </select>

                <label for="">Porcentaje: </label>
                <input type="number" class="form-control shadow p-1 mb-3 bg-body rounded" name="porcentaje">

            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <!-- <a class="btn btn-danger" href="<?=base_url('index.php/PuestosC/show').$key->id_Departamento ?>">Cancelar</a> -->
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
</div>

<br><br>