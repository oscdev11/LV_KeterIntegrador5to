<div class="container-fluid">

<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Usuario Administrador</h5></div>
<br>

</div>

<div class="container" style="width: 80%; height: 80%">

    <table class="table table-striped table-hover align-bottom">
        <thead class="table-dark">
            <th align="center" class="w-25 p-3">Acción</th>
            <th class="w-auto p-3">ID</th>
            <th class="w-auto p-3">Nombre de usuario</th>
            <th class="w-auto p-3">Contraseña</th>
        </thead>
        
        <tbody>
            <?php foreach ($userAdmin as $key): ?> 
                <tr class="w-25 p-3">
                <td>
                     <a class="btn btn-primary" href="<?=base_url('index.php/userAdminC/updateUserAdmin/').$key->id_UserAdmin ?>">Editar</a> 
                </td>

                    <td class="w-auto p-3 align-middle"><?=$key->id_UserAdmin ?></td>
                    <td class="w-auto p-3 align-middle"><?=$key->nombreUsuario ?></td>
                    <td class="w-auto p-3 align-middle"><?=md5($key->contra) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>   
</div>
<br><br>