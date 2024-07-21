<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Error 404: Página no encontrada</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333;
        text-align: center;
      }
      
      h1 {
        font-size: 72px;
        margin: 50px 0;
      }
      
      p {
        margin: 25px 0;
      }
    </style>
  </head>
  <body>
    <br><br>
    <h1>Error 404</h1>
    <img id="randomImage" alt="ni te topo" width="10%"><br><br>
    <p>Lo siento, la página que estás buscando no está disponible para ti.</p>
    <p>Por favor, si necesitas acceso contáctate con el administrador del sitio.</p>
    <a class="btn btn-danger" href="<?=base_url('index.php/OrdenesC/show') ?>">REGRESAR</a>
    <script>
      var images = [
        "<?php echo base_url('assets/image/ni_te_topo_1.png'); ?>",
        "<?php echo base_url('assets/image/ni_te_topo_2.png'); ?>",
        "<?php echo base_url('assets/image/ni_te_topo_3.png'); ?>",
        "<?php echo base_url('assets/image/ni_te_topo_4.png'); ?>"
      ]; // lista de imágenes predefinidas
      
      var randomIndex = Math.floor(Math.random() * images.length); // índice aleatorio
      
      var randomImage = document.getElementById("randomImage"); // obtiene la etiqueta img
      randomImage.src = images[randomIndex]; // actualiza el atributo src con la imagen seleccionada
    </script>
  </body>
</html>
