<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Detalles generales del tratmiento: <b><?=$tratamiento[0]->nombreTratamiento ?></h5></div>
    <br>
</div>

<div class="container">

<div class="container" align="center">
    <div class="col-8">

        <table class="table table-striped">
            <thead>
                <th class=""></th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td align="right">Nombre tratamiento:</td>
                    <td><?=$tratamiento[0]->nombreTratamiento ?></td>
                </tr>
            </tbody>
        </table>
</div>

<a class="btn btn-danger" href="<?=base_url('index.php/TratamientosC/show') ?>">Regresar</a>

</div>
