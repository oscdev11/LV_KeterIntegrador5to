<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar nuevo jefe de departamento</h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/JefeDepartamentosC/inserJefeDepartamento') ?>" method="POST">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Empleado: </label>
                <select  class="form-control shadow p-1 mb-3 bg-body rounded" name="idempleado">
                    <?php foreach ($Empleado as $key): ?>
                    <option value="<?=$key->id_Empleado?>"><?=$key->nombre ?></option>
                    <?php endforeach?>
                </select>

                <label for="">Nombre de Usuario: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombreUsuario">
                <label for="">Contraseña: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="contra">
                <label for="">Tipo de usuario:</label>
                <select name="perfil" id="" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option value="1">Administrador</option>
                    <option value="2">Jefe de Departamento</option>
                </select>
            </div> 
        </div>
    </div>
    
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/JefeDepartamentosC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
    
</div>
<br><br>