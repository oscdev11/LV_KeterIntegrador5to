<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Administrar Clientes</h5></div>
    <br>
</div>

<div class="container" style="width: 80%; height: 80%">

    <a class="btn btn-success" href="<?=base_url('index.php/ClientesC/insertCliente') ?>"><i class="fa-solid fa-plus"></i> Agregar Nuevo Cliente</a> <br><br><br>

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acciones</th>
            <th class="w-auto p-3">ID</th>
            <th class="w-auto p-3">Alias</th>
            <th class="w-auto p-3">RFC</th>
            <th class="w-auto p-3">Código Postal</th>
            <th class="w-auto p-3">Ciudad</th>
        </thead>
        
        <tbody>
            <?php foreach ($clientes as $key): ?> 
                <tr class="w-25 p-3">
                    <td align="center" class="w-auto p-3 align-middle"> <a class="btn btn-warning" href="<?=base_url('index.php/ClientesC/detalleCliente/').$key->id_Cliente ?>">Ver</a> 
                     <a class="btn btn-primary" href="<?=base_url('index.php/ClientesC/updateCliente/').$key->id_Cliente ?>">Editar</a> 
                     <a class="btn btn-danger" href="<?=base_url('index.php/ClientesC/borrarCliente/').$key->id_Cliente ?>">Eliminar</a>
                </td>

                    <td class="w-auto p-3 align-middle"><?=$key->id_Cliente ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->alias ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->rfc ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->codigoPostal ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->ciudad ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
<br><br>