<div class="container-fluid">
    <form action="<?=base_url('index.php/MaterialesC/updateMaterial/').$material[0]->id_Material ?>" method="POST">
    <br>
    <div class="alert alert-success align-middle" role="alert" align="center"><h5>Editar Material: <b><?=$material[0]->nombre ?></h5></div>
    <br>
</div>

<div class="container">

    <?php echo validation_errors(); ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <label for="">Nombre: </label>
                <input type="text" class="form-control shadow p-1 mb-3 bg-body rounded" name="nombre" value="<?=$material[0]->nombre ?>">

                <label for="">Fabricante: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="fabricante" value="<?=$material[0]->fabricante ?>">
        
                <label for="">Tipo: </label>
                <select name="tipo" id="" class="form-select shadow p-1 mb-2 bg-body rounded" value="<?=$material[0]->tipo ?>">
                    <?php if($material[0]->tipo=="Natural"):?>
                        <option value="Natural" selected>Natural</option>
                        <option value="Sintético">Sintético</option>
                    <?php else : ?>
                        <option value="Natural">Natural</option>
                        <option value="Sintético"  selected>Sintético</option>
                    <?php endif ?>
                  
                    
                </select>
        
                <label for="">Descripción: </label>
                <input type="text" class="form-control shadow p-1 mb-2 bg-body rounded" name="descripcion" value="<?=$material[0]->descripcion ?>">

                <label for="">Cantidad disponible en kg: </label>
                <input type="number" class="form-control shadow p-1 mb-2 bg-body rounded" name="cantidadDisponible" min="1" value="<?=$material[0]->cantidadDisponible ?>">

            </div> 
        </div>
    </div>
<br><br>

    <div class="container" align="center">
        <a class="btn btn-danger" href="<?=base_url('index.php/MaterialesC/show') ?>">Cancelar</a>
        <input class="btn btn-secondary" type="reset">
        <input class="btn btn-success" type="submit" value="Guardar">
        
    </div>
    
    </form>
</div>