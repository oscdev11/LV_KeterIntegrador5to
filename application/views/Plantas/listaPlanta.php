<div class="container-fluid">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Administrar Planta</h5></div>
<br>

</div>

<div class="container" style="width: 80%; height: 80%">

    <a class="btn btn-success" href="<?=base_url('index.php/PlantaC/insertPlanta') ?>"><i class="fa-solid fa-plus"></i> Agregar Nueva Planta</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">Planta </th>
            <th class="w-auto p-3">Alias</th>
            <th class="w-auto p-3">Teléfono</th>
            <th class="w-auto p-3">Dirección</th>
        </thead>
        
        <tbody>
            <?php foreach ($plantas as $key): ?> 
                
                <tr class="w-25 p-3">
                    <td>
                    <a class="btn btn-primary" href="<?=base_url('index.php/PlantaC/updatePlanta/').$key->id_Planta ?>">Editar</a> 
                    <a class="btn btn-danger" href="<?=base_url('index.php/PlantaC/borrarPlanta/').$key->id_Planta ?>">Eliminar</a>
                    </td>
                    
                    <td class="w-auto p-3 align-middle"><?=$key->nombre ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->alias ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->telefono ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->domicilio ?></td>
                
              
                    
                    
                
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
