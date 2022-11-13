<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Empleado</h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/TratamientosC/insertEmpleado') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Número de Trabajador: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="numTrabajador">
                <label for="">Nombre: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre">
                <label for="">Apellido Paterno:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="apellidoPaterno">
                <label for="">Apellido Materno:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="apellidoMaterno">
                <label for="">Departamento: </label>
                
                <select id="" name="id_Departamento" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <?php foreach ($departamentos as $key): ?>
                    <option value="<?=$key->id_Departamento ?>"> <?=$key->id_Departamento ?></option>
                    <?php endforeach?>
                </select>

                <label for="">Puesto: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="id_Puesto">
                <label for="">Domicilio:   </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="domicilio">
                <label for="">RFC:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="RFC">
                <label for="">CURP:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="CURP">
            </div>     

            <div class="col-2"></div>

            <div class="col-4">
                <label for="">NSS: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="NSS">
                <label for="">Fecha de ingreso: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="fechaIngreso">
                <label for="">Sexo: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="sexo">
                <label for="">Fecha de nacimiento: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="fechaNacimiento">
                <label for="">Estado de salud:  </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="estadoSalud">
                <label for="">Observaciones: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="observaciones">
                <label for="">Estado Civil: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="estadoCivil">
                <label for="">Teléfono de contacto:  </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="telefonoContacto">
                <label for="">Correo electrónico: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="correoElectronico">
                <label for="">Estatus: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="estatus">


        </div>
    </div>
<br><br>
        <div class="container" align="center">
            <a class="btn btn-danger" href="<?=base_url('index.php/ClientesC/show') ?>">Cancelar</a>
            <input class="btn btn-secondary" type="reset">
            <input class="btn btn-success" type="submit">
        </div>
    
    </form>

</div>