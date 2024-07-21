<div class="container-fluid">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Administrar Colores</h5></div>
<br>

</div>

<div class="container" style="width: 80%; height: 80%">

    <a class="btn btn-success" href="<?=base_url('index.php/ColoresC/insertColor') ?>"><i class="fa-solid fa-plus"></i> Agregar Nuevo Color</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">ID</th>
            <th class="w-auto p-3">Nombre</th>
            <th class="w-auto p-3">Abreviatura</th>
            <th class="w-auto p-3">Agregar Químicos</th>
            <th class="w-auto p-3">Químicos</th>
        </thead>
        
        <tbody>
            <?php foreach ($colores as $key): ?> 
                <tr class="w-25 p-3">
                    <td align="center" class="w-auto p-3 align-middle"> <a class="btn btn-warning" href="<?=base_url('index.php/ColoresC/detalleColor/').$key->id_Color ?>">Ver</a>
                     <a class="btn btn-primary" href="<?=base_url('index.php/ColoresC/updateColor/').$key->id_Color ?>">Editar</a> 
                     <a class="btn btn-danger" href="<?=base_url('index.php/ColoresC/borrarColor/').$key->id_Color ?>">Eliminar</a>
                </td>

                    <td class="w-auto p-3 align-middle"><?=$key->id_Color ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->nombreColor ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->abreviaturaColor ?></td>
                    <td class="w-auto p-3 align-middle">
                    <a class="btn btn-primary" href="<?=base_url('index.php/QuimicoColorC/show/').$key->id_Color ?>">Agregar Químicos</a>
                    </td>
                    <td class="w-auto p-3 align-middle">...</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
<br><br>