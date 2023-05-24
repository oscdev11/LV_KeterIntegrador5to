<div class="container-fluid">

<br>
<form action="<?=base_url('index.php/ClientesC/updateCliente/').$cliente[0]->id_Cliente ?>" method="POST">
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Editar Cliente: <b><?=$cliente[0]->alias ?></b></h5></div>
<br>

</div>

<div class="container">

<form action="<?=base_url('index.php/ClientesC/updateCliente/').$cliente[0]->id_Cliente ?>" method="POST">

    <?php echo validation_errors(); ?>

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Razón social: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="razonSocial" value="<?=$cliente[0]->razonSocial ?>">

                <label for="">Alias: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="alias" value="<?=$cliente[0]->alias ?>">
        
                <label for="">RFC: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="rfc" value="<?=$cliente[0]->rfc ?>">
        
                <label for="">Calle: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="calle" value="<?=$cliente[0]->calle ?>">

                <label for="">Colonia: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="colonia" value="<?=$cliente[0]->colonia ?>"">

                <label for="">Número exterior: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="numeroExterior" value="<?=$cliente[0]->numeroExterior ?>">
        
                <label for="">Número interior: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="numeroInterior" value="<?=$cliente[0]->numeroInterior ?>">
        
            </div> 

            <div class="col-2"></div>

            <div class="col-4">
            
                <label for="">Código Postal: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="codigoPostal" value="<?=$cliente[0]->codigoPostal ?>">
                
                <label for="">Ciudad: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="ciudad" value="<?=$cliente[0]->ciudad ?>">
            
                <label for="">Estado: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="estado" value="<?=$cliente[0]->estado; ?>">
            
                <label for="">Teléfono: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="telefono" value="<?=$cliente[0]->telefono ?>">
            
                <label for="">Correo Electrónico: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="correoElectronico" value="<?=$cliente[0]->correoElectronico ?>">
        
                <label for="">Dirección de envío alternativa: </label>
                <textarea class="form-control shadow p-1 mb-2 bg-body rounded" name="direccionEnvioAlternativa" id="" cols="1" rows="1" value="<?=$cliente[0]->direccionEnvioAlternativa ?>"></textarea>
            </div>
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/ClientesC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit" value="Guardar">
        
    </div>
    
    </form>
</div><br><br>