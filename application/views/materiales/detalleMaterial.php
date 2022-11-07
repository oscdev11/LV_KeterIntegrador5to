<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Detalles generales de material: <b><?=$material[0]->nombre ?></h5></div>
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
                <td align="right">Nombre:</td>
                <td><?=$material[0]->nombre ?></td>
            </tr>
            <tr>
                <td align="right">Fabricante:</td>
                <td><?=$material[0]->fabricante ?></td>
            </tr>
            <tr>
                <td align="right">Tipo:</td> <td><?=$material[0]->tipo ?></td>
            </tr>
            <tr>
                <td align="right">Descripción:</td><td><?=$material[0]->descripcion ?></td>
            </tr>
            <tr>
                <td align="right">Cantidad:</td><td><?=$material[0]->cantidadDisponible ?> kg.</td>
            </tr>
        </tbody>
    </table>
</div>

<a class="btn btn-danger" href="<?=base_url('index.php/MaterialesC/show') ?>">Regresar</a>

</div>

