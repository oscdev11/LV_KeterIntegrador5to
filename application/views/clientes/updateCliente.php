<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/ClientesC/updateCliente/').$cliente[0]->id_Cliente ?>" method="POST">

        <label for="">Razón social: </label>
        <input type="text" class="form-control" name="razonSocial" value="<?=$cliente[0]->razonSocial ?>">

        <label for="">Alias: </label>
        <input type="text" class="form-control" name="alias" value="<?=$cliente[0]->alias ?>">
        
        <label for="">RFC: </label>
        <input type="text" class="form-control" name="rfc" value="<?=$cliente[0]->rfc ?>">
        
        <label for="">Calle: </label>
        <input type="text" class="form-control" name="calle" value="<?=$cliente[0]->calle ?>">

        <label for="">Colonia: </label>
        <input type="text" class="form-control" name="colonia" value="<?=$cliente[0]->colonia ?>">
    
        <label for="">Número exterior: </label>
        <input type="text" class="form-control" name="numeroExterior" value="<?=$cliente[0]->numeroExterior ?>">
        
        <label for="">Número interior: </label>
        <input type="text" class="form-control" name="numeroInterior" value="<?=$cliente[0]->numeroInterior ?>">
        
        <label for="">Código Postal: </label>
        <input type="text" class="form-control" name="codigoPostal" value="<?=$cliente[0]->codigoPostal ?>">
        
        <label for="">Ciudad: </label>
        <input type="text" class="form-control" name="ciudad" value="<?=$cliente[0]->ciudad ?>">
        
        <label for="">Estado: </label>
        <input type="text" class="form-control" name="estado" value="<?=$cliente[0]->estado ?>">
        
        <label for="">Teléfono: </label>
        <input type="text" class="form-control" name="telefono" value="<?=$cliente[0]->telefono ?>">
        
        <label for="">Correo Electrónico: </label>
        <input type="text" class="form-control" name="correoElectronico" value="<?=$cliente[0]->correoElectronico ?>">
        
        <label for="">Dirección de envío alternativa: </label>
        <input type="text" class="form-control" name="direccionEnvioAlternativa" value="<?=$cliente[0]->direccionEnvioAlternativa ?>">

        <input type="submit">

    </form>
</div>