
<!-- LISTADO DE QuimicoColor -->

<!-- NO SIRVEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE -->

<div class="container-fluid">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Lista de Quimicos de Color: </h5></div>
<br>

</div>



<div class="container" style="width: 80%; height: 50%">

    <a class="btn btn-danger" href="<?=base_url('index.php/ColoresC/show') ?>">Regresar</a>
    <a class="btn btn-success" href="<?=base_url('index.php/PuestosC/insertPuesto') ?>"><i class="fa-solid fa-plus"></i> Agregar Nuevo Químico</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">Químico</th>
            <th class="w-auto p-3">Cantidad</th>
        </thead>
        
        <tbody>
            <?php foreach ($quimicos as $key): ?> 
                <tr class="w-25 p-3">
                    <td align="center" class="w-auto p-3 align-middle"> <!-- <a class="btn btn-warning" href="<?=base_url('index.php/DepartamentosC/detalleDepartamento/').$key->id_Departamento ?>">Ver</a> -->
                     <!-- <a class="btn btn-primary" href="<?=base_url('index.php/DepartamentosC/updateDepartamento/').$key->id_Quimico ?>">Editar</a>  -->
                     <a class="btn btn-danger" href="<?=base_url('index.php/QuimicoColorC/borrarQuimicoColor/').$key->id_Quimico ?>">Eliminar</a>
                </td>

                    <td class="w-auto p-3 align-middle"><?=$key->id_Quimico ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->cantidadUsar ?> ml.</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
<br><br>
