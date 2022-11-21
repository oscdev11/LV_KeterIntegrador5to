<div class="container-fluid">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Ordenes de Producción</h5></div>
<br>

</div>

<div class="container" style="width: 80%; height: 80%">

    <a class="btn btn-success" href="<?=base_url('index.php/OrdenesC/insertOrden') ?>"><i class="fa-solid fa-plus"></i> Agregar orden</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="">Acciones</th>
            <th class="w-auto p-3">Pedido</th>

            <th class="w-auto p-3">Cliente </th>
            <th class="w-auto p-3">Domicilio de envio </th>
            <th class="w-auto p-3">Fecha registro</th>
            <th class="w-auto p-3">Fecha de entrega</th>
            <th class="w-auto p-3">Estado</th>

            <th class="w-auto p-3">Reporte</th>
        </thead>
        
        <tbody>
            <?php foreach ($ordenes as $key): ?> 
        
                <tr class="w-25 p-3">
                    <td>
                        <a class="btn btn-primary" href="<?=base_url('index.php/OrdenesC/updatePlanta/').$key->id_OrdenProduccion ?>">Editar</a> 
                        <a class="btn btn-danger" href="<?=base_url('index.php/OrdenesC/borrarOrden/').$key->id_OrdenProduccion ?>">Eliminar</a>
                    </td>
                    
                    <td>
                            <a class="btn btn-warning btn-sm" href="<?=base_url('index.php/OrdenesC/updatePlanta/').$key->id_OrdenProduccion ?>">Administrar pedido</a> 
                            <td class="w-auto p-3 align-middle"><?=$key->id_Cliente ?></td>
                            <td class="w-auto p-3 align-middle"><?=$key->domicilioEnvio ?></td>
                            <td class="w-auto p-3 align-middle"><?=$key->fechaCaptura ?></td>
                            <td class="w-auto p-3 align-middle"><?=$key->fechaEntrega ?></td>
                            <td class="w-auto p-3 align-middle"><?=$key->estado ?></td>

                            <td>
                                <a class="btn btn-secondary btn-sm" href="<?=base_url('index.php/OrdenesC/updatePlanta/').$key->id_Planta ?>">PDF </a> 
                            </td>
                    
                    </td>
                
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
