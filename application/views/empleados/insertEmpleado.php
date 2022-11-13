<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Empleado</h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/EmpleadosC/insertEmpleado') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Número de Trabajador: </label>
                <input type="text" id="" class="form-control shadow p-1 mb-3 bg-body rounded" name="numTrabajador">
                <label for="">Nombre: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre">
                <label for="">Apellido Paterno:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="apellidoPaterno">
                <label for="">Apellido Materno:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="apellidoMaterno">
                <label for="">Departamento: </label>
                
                <label for="">Puesto: </label>

                <select id="" name="id_Puesto" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option>Seleccionar</option>
                    <?php foreach ($puestos as $key): ?>
                    <option value="<?=$key->id_Puesto ?>"> <?=$key->nombre ?></option>
                    <?php endforeach?>
                </select>

              
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
                <input type="date" class="form-control shadow p-1 mb-2 bg-body rounded" name="fechaIngreso">
                <label for="">Sexo: </label>
                <select id="" name="sexo" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option>Seleccionar</option>
                    <option value="H">Masculino</option>
                    <option value="M">Femenino</option>
                </select>
                <label for="">Fecha de nacimiento: </label>
                <input type="date" class="form-control shadow p-1 mb-2 bg-body rounded" name="fechaNacimiento">
                <label for="">Estado de salud:  </label>
                <select id="" name="estadoSalud" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option>Seleccionar</option>
                    <option value="Saludable">Saludable</option>
                    <option value="Discapacitadad">Discapacitadad</option>
                    <option value="Enfermedad">Enfermedad</option>
                </select>
                <label for="">Observaciones: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="observaciones">
                <label for="">Estado Civil: </label>
                <select id="" name="estadoCivil" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option>Seleccionar</option>
                    <option value="Casado">Casado</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Viudo">Viudo</option>
                </select>
                <label for="">Teléfono de contacto:  </label>
                <input type="number" class="form-control shadow p-1 mb-2 bg-body rounded" name="telefonoContacto">
                <label for="">Correo electrónico: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="correoElectronico">
                <label for="">Estatus: </label>
                <select id="" name="estatus" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option>Seleccionar</option>
                    <option value="Activo">Activo</option>
                    <option value="Renuncia">Renuncia</option>
                    <option value="Baja">Baja</option>
                    <option value="Despido">Despido</option>
                </select>
        </div>
    </div>
<br><br>
        <div class="container" align="center">
            <a class="btn btn-danger" href="<?=base_url('index.php/EmpleadosC/show') ?>">Cancelar</a>
            <input class="btn btn-secondary" type="reset">
            <input class="btn btn-success" type="submit">
        </div>
    
    </form>

</div>