<div class="container-fluid">
    <form action="<?=base_url('index.php/JefeDepartamentosC/updateJefeDepartamento/').$jefedepartamento[0]->id_JefeDepartamento ?>" method="POST">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Editar Datos de acceso de Usuario: <b><?=$jefedepartamento[0]->nombreUsuario ?></h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Nombre de Usuario: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombreUsuario" value="<?=$jefedepartamento[0]->nombreUsuario ?>">

                <label for="">Escribe la nueva contraseña: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="contra" value="">
            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/JefeDepartamentosC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit" value="Guardar">
        
    </div>
    
    </form>
</div><br><br>