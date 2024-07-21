<div class="container-fluid">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Detalles generales de planta: <b><?=$planta[0]->nombre ?></h5></div>
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
                    <td align="right">Plana:</td>
                    <td><?=$planta[0]->planta ?></td>
                </tr>
                <tr>
                    <td align="right">Alias:</td>       <td><?=$planta[0]->alias ?></td>
                </tr>
                <tr>
                    <td align="right">telefono:</td>    <td><?=$planta[0]->telefono ?></td>
                </tr>
                <tr>
                    <td align="right">domicilio:</td>   <td><?=$planta[0]->domicilio ?></td>
                </tr>
            </tbody>s
        </table>
    </div>
</div>
<br><br>

