
<!-- LISTADO DE PUESTOS -->

<!-- NO SIRVEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE -->

<div class="container-fluid">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Lista de Pedidos</h5></div>
<br>

</div>



<div class="container" style="width: 80%; height: 50%">

    <a class="btn btn-danger" href="<?=base_url('index.php/OrdenesC/show') ?>">Regresar</a>
    <a class="btn btn-success" href="<?=base_url('index.php/PedidosC/insertPedido') ?>"><i class="fa-solid fa-plus"></i> Agregar Nuevo Pedido</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">ID</th>
            <th class="w-auto p-3">Color</th>
            <th class="w-auto p-3">Cantidad</th>
            <th class="w-auto p-3">Precio unitario</th>
            <th class="w-auto p-3">Descripción</th>
            <th class="w-auto p-3">Material</th>
            <th class="w-auto p-3">Tratamiento</th>
            <th class="w-auto p-3">Estatus</th>
        </thead>
        
        <tbody>
            <?php foreach ($pedidos as $key): ?> 
                <tr class="w-25 p-3">
                    <td align="center" class="w-auto p-3 align-middle"> <!-- <a class="btn btn-warning" href="<?=base_url('index.php/DepartamentosC/detalleDepartamento/').$key->id_Departamento ?>">Ver</a> -->
                     <a class="btn btn-primary" href="<?=base_url('index.php/DepartamentosC/updateDepartamento/').$key->id_Pedido ?>">Editar</a> 
                     <a class="btn btn-danger" href="<?=base_url('index.php/PuestosC/borrarPuesto/').$key->id_Pedido ?>">Eliminar</a>
                    </td>

                    <td class="w-auto p-3 align-middle"><?=$key->id_Pedido ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->id_Color ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->cantidad ?> mts.</td>
                    <td class="w-auto p-3 align-middle">$<?=$key->PrecioUnitario ?> MXN.</td>
                    <td class="w-auto p-3 align-middle"><?=$key->descripcion ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?=base_url('index.php/DepartamentosC/updateDepartamento/').$key->id_Pedido ?>">Material</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="<?=base_url('index.php/DepartamentosC/updateDepartamento/').$key->id_Pedido ?>">Tratamiento</a>
                    </td>
                    <td>estatus</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
<br><br>