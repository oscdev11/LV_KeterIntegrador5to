<!-- FORMULARIO PARA CREAR UN NUEVO PUESTO -->

<!-- NO SIRVEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE -->

<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Puesto </h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/PedidosC/insertPedido') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">

                <label for="">Orden de producción: </label>
                <select id="" name="id_OrdenProduccion" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($ordenes as $key): ?>
                    <option value="<?=$key->id_OrdenProduccion ?>"> <?=$key->id_OrdenProduccion ?></option>
                    <?php endforeach?>
                </select>

                <label for="">Color: </label>
                <select id="" name="id_Color" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($colores as $key): ?>
                    <option value="<?=$key->id_Color ?>"> <?=$key->nombreColor ?></option>
                    <?php endforeach?>
                </select>

                <label for="">Cantidad: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="cantidad">

                <label for="">Precio Unitario: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="PrecioUnitario">

                <label for="">Descripción:</label>
                <textarea class="form-control shadow p-1 mb-2 bg-body rounded" name="descripcion" id="" cols="1" rows="1"></textarea>

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