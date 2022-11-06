
<div class="container">

<form action="<?=base_url('index.php/ClientesC/updateCliente/').$cliente[0]->id_Cliente ?>" method="POST">
<br>
<div class="alert alert-success align-middle" role="alert" align="center"><h5>Detalles generales de cliente: <b><?=$cliente[0]->alias ?></b></h5></div>


<div class="container" align="center">
    <div class="col-8">

    <table class="table table-striped">
        <thead>
            <th class=""></th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td align="right">Razón social:</td>
                <td><?=$cliente[0]->razonSocial ?></td>
            </tr>
            <tr>
                <td align="right">Alias:</td>
                <td><?=$cliente[0]->alias ?></td>
            </tr>
            <tr>
                <td align="right">RFC:</td> <td><?=$cliente[0]->rfc ?></td>
            </tr>
            <tr>
                <td align="right">Calle:</td><td><?=$cliente[0]->calle ?></td>
            </tr>
            <tr>
                <td align="right">Colonia:</td><td><?=$cliente[0]->colonia ?></td>
            </tr>
            <tr>
                <td align="right">Número exterior:</td><td><?=$cliente[0]->numeroInterior ?></td>
            </tr>
            <tr>
                <td align="right">Número interior:</td><td><?=$cliente[0]->codigoPostal ?></td>
            </tr>
            <tr>
                <td align="right">Código postal:</td><td><?=$cliente[0]->ciudad ?></td>
            </tr>
            <tr>
                <td align="right">Ciudad:</td><td><?=$cliente[0]->estado ?></td>
            </tr>
            <tr>
                <td align="right">Estatus:</td><td><?=$cliente[0]->telefono ?></td>
            </tr>
            <tr>
                <td align="right">Teléfono:</td><td><?=$cliente[0]->correoElectronico ?></td>
            </tr>
            <tr>
                <td align="right">CorreoElectrónico:</td><td><?=$cliente[0]->direccionEnvioAlternativa ?></td>
            </tr>
            <tr>
                <td align="right">Dirección de envío alternativa:</td><td><?=$cliente[0]->numeroExterior ?></td>
            </tr>
        </tbody>
    </table>
</div>

<a class="btn btn-danger" href="<?=base_url('index.php/ClientesC/show') ?>">Regresar</a>

</div>




                
                
                
                
                
                
                
                
                
                
                





                
                
                
                
                
                
                
                
                
                
                