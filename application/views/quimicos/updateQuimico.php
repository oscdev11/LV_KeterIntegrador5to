<div class="container-fluid">
    <form action="<?=base_url('index.php/QuimicosC/updateQuimico/').$quimico[0]->id_Quimico ?>" method="POST">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Editar Quimico: <b><?=$quimico[0]->nombre ?></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Nombre: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre" value="<?=$quimico[0]->nombre ?>">

                <label for="">Fabricante: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="fabricante" value="<?=$quimico[0]->fabricante ?>">
        
                <label for="">Descripción: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="descripcion" value="<?=$quimico[0]->descripcion ?>">
                <textarea class="form-control shadow p-1 mb-2 bg-body rounded" name="descripcion" id="" cols="1" rows="1" value="<?=$quimico[0]->descripcion ?>"></textarea>

                <label for="">Cantidad disponible en kg: </label>
                <input type="number" class="form-control shadow p-1 mb-2 bg-body rounded" name="cantidadDisponible" min="1" value="<?=$quimico[0]->cantidadDisponible ?>">

            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/QuimicosC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit" value="Guardar">
        
    </div>
    
    </form>
</div><br><br>