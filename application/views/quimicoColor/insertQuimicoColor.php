<!-- FORMULARIO PARA CREAR UN NUEVO PUESTO -->
<!-- NO SIRVEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE -->

<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Químico al Color:  </h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/QuimicoColorC/insertQuimicoColor') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">

                <label for="">Color: </label>
                <select id="" name="id_Color" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($colores as $key): ?>
                    <option value="<?=$key->id_Color ?>"> <?=$key->nombreColor ?></option>
                    <?php endforeach?>
                </select>

                <label for="">Químico: </label>
                <select id="" name="id_Quimico" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($quimicos as $key): ?>
                    <option value="<?=$key->id_Quimico ?>"> <?=$key->nombre ?></option>
                    <?php endforeach?>
                </select>

                <label for="">Cantidad a usar en mililitros: </label>
                <input type="number" class="form-control shadow p-1 mb-3 bg-body rounded" name="cantidadUsar">
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