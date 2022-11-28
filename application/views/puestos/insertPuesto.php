<!-- FORMULARIO PARA CREAR UN NUEVO PUESTO -->

<!-- NO SIRVEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE -->

<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Puesto </h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/PuestosC/insertPuesto') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Nombre del puesto: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre">
            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/PuestosC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
</div>

<br><br>