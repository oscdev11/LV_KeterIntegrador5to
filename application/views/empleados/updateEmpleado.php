<div class="container-fluid">
<form action="<?=base_url('index.php/EmpleadosC/updateEmpleado').$empleado[0]->id_Empleado ?>" method="POST">
<br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Editar Empleado: <b><?=$empleado[0]->nombre ?></h5></div>
    <br>
</div>
    <?php echo validation_errors(); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Número de Trabajador: </label>
                <input type="text" id="" class="form-control shadow p-1 mb-3 bg-body rounded" name="numTrabajador" value="<?=$empleado[0]->numTrabajador ?>">
                <label for="">Nombre: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre" value="<?=$empleado[0]->nombre ?>">
                <label for="">Apellido Paterno:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="apellidoPaterno" value="<?=$empleado[0]->apellidoPaterno?>">
                <label for="">Apellido Materno:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="apellidoMaterno" value="<?=$empleado[0]->apellidoMaterno?>">
                <label for="">Departamento: </label>
                <label for="">Puesto: </label>

                <select id="" name="id_Puesto" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option>Seleccionar</option>
                    <?php foreach ($puestos as $key): ?>
                    <option value="<?=$key->id_Puesto ?>"> <?=$key->nombre ?></option>
                    <?php endforeach?>
                </select>
              
                <label for="">Domicilio:   </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="domicilio" value="<?=$empleado[0]->domicilio?>">
                <label for="">RFC:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="RFC" value="<?=$empleado[0]->RFC?>">
                <label for="">CURP:  </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="CURP" value="<?=$empleado[0]->CURP?>">
            </div>     

            <div class="col-2"></div>

            <div class="col-4">
                <label for="">NSS: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="NSS" value="<?=$empleado[0]->NSS?>">
                <label for="">Fecha de ingreso: </label>
                <input type="date" class="form-control shadow p-1 mb-2 bg-body rounded" name="fechaIngreso" value="<?=$empleado[0]->fechaIngreso?>">
                <label for="">Sexo: </label>
                <select id="" name="sexo" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option>Seleccionar</option>
                    <option value="H">Masculino</option>
                    <option value="M">Femenino</option>
                </select>
                <label for="">Fecha de nacimiento: </label>
                <input type="date" class="form-control shadow p-1 mb-2 bg-body rounded" name="fechaNacimiento" value="<?=$empleado[0]->fechaNacimiento?>">
                <label for="">Estado de salud:  </label>
                <select id="" name="estadoSalud" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option>Seleccionar</option>
                    <option value="Saludable">Saludable</option>
                    <option value="Discapacitadad">Discapacitadad</option>
                    <option value="Enfermedad">Enfermedad</option>
                </select>
                <label for="">Observaciones: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="observaciones" value="<?=$empleado[0]->observaciones?>">
                <label for="">Estado Civil: </label>
                <select id="" name="estadoCivil" class="form-control shadow p-1 mb-3 bg-body rounded">
                    <option>Seleccionar</option>
                    <option value="Casado">Casado</option>
                    <option value="Soltero">Soltero</option>
                    <option value="Viudo">Viudo</option>
                </select>
                <label for="">Teléfono de contacto:  </label>
                <input type="number" class="form-control shadow p-1 mb-2 bg-body rounded" name="telefonoContacto" value="<?=$empleado[0]->telefonoContacto?>">
                <label for="">Correo electrónico: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="correoElectronico" value="<?=$empleado[0]->correoElectronico?>">
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
    


<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/EmpleadosC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit" value="Guardar">
        
    </div>
    
    </form>
</div>