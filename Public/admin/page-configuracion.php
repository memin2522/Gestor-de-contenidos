<?php require_once('lib/data.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administrador CMS</title>
  <link rel="stylesheet" href="css/configuracion.css">
</head>
<body>
  <?php $res = cargar_datos_configuracion(); ?>
   <div class="contenedor">
   <form class="form" action="resultado_configuracion.php" method="post">
      
          <div class="form-header">
            <h1 class="form-title"><span>Configuración</span></h1>
          </div>

          <label for="title" class="form-label">Titulo web</label>
          <input name="title" type="text" placeholder="Titulo" value="<?= $res['titulo'] ?>" class="form-input">

          <label for="address" class="form-label">Dirección</label>
          <input name="address" type="text" placeholder="Dirección" value="<?= $res['direccion'] ?>" class="form-input">


          <label for="geolocation" class="form-label">Geolocalización</label>
          <input name="geolocation" type="text" placeholder="latitud,longitud" value="<?= $res['geolocalizacion'] ?>" class="form-input">

          <button type="submit" class="button">Guardar</button>
      
  </form>
</body>
<?php include 'footer.php'; ?>