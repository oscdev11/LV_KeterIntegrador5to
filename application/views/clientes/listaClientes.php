<div class="container">

    <a class="btn btn-success" href="<?=base_url('index.php/ClientesC/insertCliente') ?>">Agregar Nuevo Cliente</a>

    <table class="table table-striped table-bordered">
        <thead>
            <th>Acciones</th>
            <th>ID</th>
            <th>Alias</th>
            <th>RFC</th>
            <th>Código Postal</th>
            <th>Ciudad</th>
        </thead>
        
        <tbody>
            <?php foreach ($clientes as $key): ?> 
                <tr>
                    <td> <a class="btn btn-success" href="<?=base_url('index.php/ClientesC/detalleCliente/').$key->id_Cliente ?>">Ver</a> 
                     <a class="btn btn-primary" href="<?=base_url('index.php/ClientesC/updateCliente/').$key->id_Cliente ?>">Editar</a> 
                     <a class="btn btn-danger" href="<?=base_url('index.php/ClientesC/borrarCliente/').$key->id_Cliente ?>">Eliminar</a>
                     

                </td>

                    <td><?=$key->id_Cliente ?></td>
                    <td><?=$key->alias ?></td>
                    <td><?=$key->rfc ?></td>
                    <td><?=$key->codigoPostal ?></td>
                    <td><?=$key->ciudad ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>