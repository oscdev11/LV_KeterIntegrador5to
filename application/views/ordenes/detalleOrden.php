<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Detalles generales de planta: <b><?=$odendesVer[0]->id_OrdenProduccion ?></h5></div>
    <br>
</div>

<div class="container"></div>

<div class="container" align="center">
    <div class="col-8">

        <table class="table table-striped">
            <thead>
                <th class=""></th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td align="right">Plana:</td><td><?=$odendesVer[0]->id_Planta ?></td>
                </tr>
                <tr>
                    <td align="right">Cliente:</td><td><?=$odendesVer[0]->id_Cliente ?></td>
                </tr>
                <tr>
                    <td align="right">Fecha de captura:</td><td><?=$odendesVer[0]->fechaCaptura ?></td>
                </tr>
                <tr>
                    <td align="right">Fecha de entrega:</td><td><?=$odendesVer[0]->fechaCaptura ?></td>
                </tr>
                <tr>
                    <td align="right">Domicilio de envio :</td><td><?=$odendesVer[0]->domicilioEnvio ?></td>
                </tr>
                <tr>
                    <td align="right">Comentarios:</td><td><?=$odendesVer[0]->comentarios ?></td>
                </tr>
                <tr>
                    <td align="right">Estado:</td><td><?=$odendesVer[0]->estado ?></td>
                </tr>
              
            </tbody>
        </table>
        </div>

<a class="btn btn-danger" href="<?=base_url('index.php/OrdenesC/show') ?>">Regresar</a>
</div>
    </div>
</div>
<br><br>