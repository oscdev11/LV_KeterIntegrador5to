<div class="container-fluid">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Lista de materiales del pedido</h5></div>
<br>

</div>

<div class="container" style="width: 80%; height: 80%">

    <a class="btn btn-success" href="<?=base_url('index.php/PedidoMaterialesC/insertPedidoMaterial') ?>"><i class="fa-solid fa-plus"></i> Agregar Nuevo Material</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">ID</th>
            <th class="w-auto p-3">Nombre</th>
            <th class="w-auto p-3">Porcentaje</th>
        </thead>
        
        <tbody>
            <?php foreach ($materiales as $key): ?> 
                <tr class="w-25 p-3">
                    <td align="center" class="w-auto p-3 align-middle"> 
                    <!-- <a class="btn btn-warning" href="<?=base_url('index.php/ColoresC/detalleColor/').$key->id_Color ?>">Ver</a> -->
                     <!-- <a class="btn btn-primary" href="<?=base_url('index.php/PedidoMaterialesC/updatePedidoMaterial/').$key->id_Material ?>">Editar</a>  -->
                     <a class="btn btn-danger" href="<?=base_url('index.php/PedidoMaterialesC/borrarPedidoMaterial/').$key->id_Material ?>">Eliminar</a>
                </td>

                    <td class="w-auto p-3 align-middle"><?=$key->id_Material ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->id_Material ?>(nombre)</td>
                    <td class="w-auto p-3 align-middle"><?=$key->porcentaje ?>%</td>
                    
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
<br><br>