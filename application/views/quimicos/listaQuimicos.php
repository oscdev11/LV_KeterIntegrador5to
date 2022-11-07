

<div class="container" style="width: 80%; height: 80%">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Administrar Químicos</h5></div>
<br>

    <a class="btn btn-danger" href="<?=base_url('index.php/ClientesC/show') ?>">Regresar</a>
    <a class="btn btn-success" href="<?=base_url('index.php/QuimicosC/insertQuimico') ?>">Agregar Nuevo Químico</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">ID</th>
            <th class="w-auto p-3">Nombre</th>
            <th class="w-auto p-3">Fabricante</th>
            <th class="w-auto p-3">Descripción</th>
            <th class="w-auto p-3">Cantidad Disponible</th>
        </thead>
        
        <tbody>
            <?php foreach ($quimicos as $key): ?> 
                <tr class="w-25 p-3">
                    <td align="center" class="w-auto p-3 align-middle"> <!-- <a class="btn btn-warning" href="<?=base_url('index.php/QuimicosC/detalleQuimico/').$key->id_Quimico ?>">Ver</a> -->
                     <a class="btn btn-primary" href="<?=base_url('index.php/QuimicosC/updateQuimico/').$key->id_Quimico ?>">Editar</a> 
                     <a class="btn btn-danger" href="<?=base_url('index.php/QuimicosC/borrarQuimico/').$key->id_Quimico ?>">Eliminar</a>
                </td>

                    <td class="w-auto p-3 align-middle"><?=$key->id_Quimico ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->nombre ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->fabricante ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->descripcion ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->cantidadDisponible ?> ml.</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
