
<!-- LISTADO DE DEPARTAMENTOS -->

<!-- NO SIRVEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE -->

<div class="container-fluid">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Lista de Puestos</h5></div>
<br>

</div>



<div class="container" style="width: 80%; height: 50%">

    <a class="btn btn-danger" href="<?=base_url('index.php/DepartamentosC/show') ?>">Regresar</a>
    <a class="btn btn-success" href="<?=base_url('index.php/DepartamentosC/insertPuesto') ?>"><i class="fa-solid fa-plus"></i> Agregar Nuevo Puesto</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">ID</th>
            <th class="w-auto p-3">Nombre</th>
        </thead>
        
        <tbody>
            <?php foreach ($puestos as $key): ?> 
                <tr class="w-25 p-3">
                    <td align="center" class="w-auto p-3 align-middle"> <!-- <a class="btn btn-warning" href="<?=base_url('index.php/DepartamentosC/detalleDepartamento/').$key->id_Departamento ?>">Ver</a> -->
                     <!-- <a class="btn btn-primary" href="<?=base_url('index.php/DepartamentosC/updateDepartamento/').$key->id_Departamento ?>">Editar</a>  -->
                     <a class="btn btn-danger" href="<?=base_url('index.php/DepartamentosC/borrarDepartamento/').$key->id_Departamento ?>">Eliminar</a>
                </td>

                    <td class="w-auto p-3 align-middle"><?=$key->id_Puesto ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->nombre ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>