<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Agregar Nuevo Cliente</h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>

    <form action="<?=base_url('index.php/ClientesC/insertCliente') ?>" method="POST">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Razón social: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="razonSocial">

                <label for="">Alias: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="alias">
        
                <label for="">RFC: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="rfc">
        
                <label for="">Calle: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="calle">

                <label for="">Colonia: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="colonia">

                <label for="">Número exterior: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="numeroExterior">
        
                <label for="">Número interior: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="numeroInterior">
        
            </div> 

            <div class="col-2"></div>

            <div class="col-4">
            
                <label for="">Código Postal: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="codigoPostal">
                
                <label for="">Ciudad: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="ciudad">
            
                <label for="">Estado: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="estado">
            
                <label for="">Teléfono: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="telefono">
            
                <label for="">Correo Electrónico: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="correoElectronico">
        
                <label for="">Dirección de envío alternativa: </label>
                <textarea class="form-control shadow p-1 mb-2 bg-body rounded" name="direccionEnvioAlternativa" id="" cols="1" rows="1"></textarea>
            </div>
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/ClientesC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit">
        
    </div>
    
    </form>
</div>