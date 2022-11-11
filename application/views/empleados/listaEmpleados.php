<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Administrar Empleado</h5></div>
    <br>
</div>
<div class="container" style="width: 80%; height: 80%">
<a class="btn btn-success" href=""><i class="fa-solid fa-plus"></i> Agregar Nuevo Empleado</a> <br><br><br>

<table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">Nombre</th>
            <th class="w-auto p-3">Número trabajador</th>
            <th class="w-auto p-3">Sexo</th>
            <th class="w-auto p-3">Estatus</th>
            
        </thead>
            <?php foreach ($empleados as $key): ?>
                <tr class="w-25 p-3">
                    <td align="center" class="w-auto p-3 align-middle"> <a class="btn btn-warning" href="">Ver</a> 
                     <a class="btn btn-primary" href="">Editar</a> 
                     <a class="btn btn-danger" href="">Eliminar</a>
                </td>
                    <td class="w-auto p-3 align-middle"><?=$key->nombre ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->numTrabajador  ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->sexo ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->estatus ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
