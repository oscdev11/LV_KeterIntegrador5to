<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Detalles generales del Empleado: <b><?=$empleado[0]->nombre ?></h5></div>
    <br>
</div>

<div class="container">

<div class="container" align="center">
    <div class="col-8">

        <table class="table table-striped">
            <thead>
                <th class="w-25 p-3"></th>
                <th></th>
            </thead>
            <tbody>
            <tr>
                    <td align="right">ID:</td>
                    <td><?=$empleado[0]->id_Empleado?></td>
                </tr>
                <tr>
                    <td align="right">Nombre Completo:</td>
                    <td><?=$empleado[0]->nombre ?> <?=$empleado[0]->apellidoPaterno ?> <?=$empleado[0]->apellidoMaterno ?></td>
                </tr>
                <tr>
                    <td align="right">Domicilio:</td>
                    <td><?=$empleado[0]->domicilio ?></td>
                </tr>
                <tr>
                    <td align="right">RFC:</td>
                    <td><?=$empleado[0]->RFC ?></td>
                </tr>
                <tr>
                    <td align="right">CURP:</td>
                    <td><?=$empleado[0]->CURP ?></td>
                </tr>
                <tr>
                    <td align="right">NSS:</td>
                    <td><?=$empleado[0]->NSS ?></td>
                </tr>
                <tr>
                    <td align="right">Fecha De Ingreso:</td>
                    <td><?=$empleado[0]->fechaIngreso ?></td>
                </tr>
                <tr>
                    <td align="right">Sexo:</td>
                    <td><?=$empleado[0]->sexo ?></td>
                </tr>
                <tr>
                    <td align="right">Fecha De Nacimiento:</td>
                    <td><?=$empleado[0]->fechaNacimiento ?></td>
                </tr>
                <tr>
                    <td align="right">Estado De Salud:</td>
                    <td><?=$empleado[0]->estadoSalud ?></td>
                </tr>
                <tr>
                    <td align="right">Observaciones:</td>
                    <td><?=$empleado[0]->observaciones?></td>
                </tr>
                <tr>
                    <td align="right">Estado Civil:</td>
                    <td><?=$empleado[0]->estadoCivil ?></td>
                </tr>
                <tr>
                    <td align="right">Telefono De Contacto:</td>
                    <td><?=$empleado[0]->telefonoContacto ?></td>
                </tr>
                <tr>
                    <td align="right">Correo Electronico:</td>
                    <td><?=$empleado[0]->correoElectronico ?></td>
                </tr>
                <tr>
                    <td align="right">Estatus:</td>
                    <td><?=$empleado[0]->estatus ?></td>
                </tr>
            </tbody>
        </table>
</div>

<a class="btn btn-danger" href="<?=base_url('index.php/EmpleadosC/show') ?>">Regresar</a>

</div>