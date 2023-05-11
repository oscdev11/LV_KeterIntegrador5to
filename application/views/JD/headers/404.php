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
    <br><br><br>
    <img id="randomImage" alt="ni te topo" width="20%">
    <h1>Error 404</h1>
    <p>Lo siento, la página que estás buscando no está disponible para ti.</p>
    <p>Por favor, si necesitas acceso contáctate con el administrador del sitio.</p>
    <a class="btn btn-danger" href="<?=base_url('index.php/OrdenesC/show') ?>">REGRESAR</a>
    <script>
      var images = [
        "https://stickerly.pstatic.net/sticker_pack/5zqz0cN1N2GU4r4he4tpWw/AS25OB/27/03ad8ff9-ed2d-4e38-a1c2-86a5f186669f.png",
        "https://stickerly.pstatic.net/sticker_pack/W8EUW83OyjrrohoZgKyLPw/0T21D0/2/9bb8a990-72c0-4159-9cd8-fb6667d15f65.png",
        "https://stickerly.pstatic.net/sticker_pack/W8EUW83OyjrrohoZgKyLPw/0T21D0/2/b43e99ed-6f39-4d1e-800a-cbba66050680.png",
        "https://stickerly.pstatic.net/sticker_pack/W8EUW83OyjrrohoZgKyLPw/0T21D0/2/d25662b7-75b1-4bca-94c3-2903e29ebf4c.png"
      ]; // lista de imágenes predefinidas
      
      var randomIndex = Math.floor(Math.random() * images.length); // índice aleatorio
      
      var randomImage = document.getElementById("randomImage"); // obtiene la etiqueta img
      randomImage.src = images[randomIndex]; // actualiza el atributo src con la imagen seleccionada
    </script>
  </body>
</html>
