<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Detalles generales del color: <b><?=$color[0]->nombreColor ?></h5></div>
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
                    <td align="right">Nombre color:</td>
                    <td><?=$color[0]->nombreColor ?></td>
                </tr>
                <tr>
                    <td align="right">Abreviatura:</td>
                    <td><?=$color[0]->abreviaturaColor ?></td>
                </tr>
            </tbody>
        </table>
</div>

<a class="btn btn-danger" href="<?=base_url('index.php/ColoresC/show') ?>">Regresar</a>

</div>
</div>
<br><br>