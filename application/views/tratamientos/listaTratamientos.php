<div class="container-fluid">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Administrar Tratamientos</h5></div>
<br>

</div>

<div class="container" style="width: 80%; height: 80%">

    <a class="btn btn-success" href="<?=base_url('index.php/TratamientosC/insertTratamiento') ?>"><i class="fa-solid fa-plus"></i> Agregar Nuevo Tratmiento</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">ID</th>
            <th class="w-auto p-3">Nombre</th>
            <th class="w-auto p-3">Químicos</th>
        </thead>
        
        <tbody>
            <?php foreach ($tratamientos as $key): ?> 
                <tr class="w-25 p-3">
                    <td align="center" class="w-auto p-3 align-middle"> <a class="btn btn-warning" href="<?=base_url('index.php/TratamientosC/detalleTratamiento/').$key->id_Tratamiento ?>">Ver</a>
                     <a class="btn btn-primary" href="<?=base_url('index.php/TratamientosC/updateTratamiento/').$key->id_Tratamiento ?>">Editar</a> 
                     <a class="btn btn-danger" href="<?=base_url('index.php/TratamientosC/borrarTratamiento/').$key->id_Tratamiento ?>">Eliminar</a>
                </td>

                    <td class="w-auto p-3 align-middle"><?=$key->id_Tratamiento ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->nombreTratamiento ?></td>
                    <td class="w-auto p-3 align-middle">Aquí irán los químicos</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
