<div class="container-fluid">
    <form action="<?=base_url('index.php/DepartamentosC/updateDepartamento/').$departamento[0]->id_Departamento ?>" method="POST">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Editar Departamento: <b><?=$departamento[0]->nombre ?></h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Nombre: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre" value="<?=$departamento[0]->nombre ?>">
            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/DepartamentosC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit" value="Guardar">
        
    </div>
    
    </form>
</div>