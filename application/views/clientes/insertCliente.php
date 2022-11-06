<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/ClientesC/insertCliente') ?>" method="POST">

        <label for="">Razón social: </label>
        <input type="text" class="form-control" name="razonSocial">

        <label for="">Alias: </label>
        <input type="text" class="form-control" name="alias">
        
        <label for="">RFC: </label>
        <input type="text" class="form-control" name="rfc">
        
        <label for="">Calle: </label>
        <input type="text" class="form-control" name="calle">

        <label for="">Colonia: </label>
        <input type="text" class="form-control" name="colonia">
        
        <label for="">Número exterior: </label>
        <input type="text" class="form-control" name="numeroExterior">
        
        <label for="">Número interior: </label>
        <input type="text" class="form-control" name="numeroInterior">
        
        <label for="">Código Postal: </label>
        <input type="text" class="form-control" name="codigoPostal">
        
        <label for="">Ciudad: </label>
        <input type="text" class="form-control" name="ciudad">
        
        <label for="">Estado: </label>
        <input type="text" class="form-control" name="estado">
        
        <label for="">Teléfono: </label>
        <input type="text" class="form-control" name="telefono">
        
        <label for="">Correo Electrónico: </label>
        <input type="text" class="form-control" name="correoElectronico">
        
        <label for="">Dirección de envío alternativa: </label>
        <input type="text" class="form-control" name="direccionEnvioAlternativa">

        <input type="submit">

    </form>
</div>