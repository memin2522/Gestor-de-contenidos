<?php require_once('lib/data.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administrador CMS</title>
  <link rel="stylesheet" href="css/tabla.css">
</head>
<body>
  <?php $res = cargar_datos_contenidos(); $array_type = retornar_tipo_contenido(); ?>
   
   <div class="mid-page" style="text-align:right;" >
      <a href="page-contenido.php" class="button1">Nuevo</a>
   </div>
    <table border="1" class="pure-table">
      <thead>
          <tr>
              <th>#</th>
              <th>Titulo</th>
              <th>Fecha</th>
              <th>Tipo</th>
              <th>Categoría</th>
              <th>Acción</th>
          </tr>
      </thead>

      <tbody>
          <?php while(is_array($res) && list($k, $v) = each($res) ): ?>
          <tr>
            <td><?= $k+1 ?></td>
            <td><?= $v['titulo'] ?></td>
            <td><?= $v['fecha_publicacion'] ?></td>
            <td><?= $array_type [ $v['tipo'] ] ?></td>
            <td><?= $v['categoria'] ?></td>
            <td><a href="page-contenido.php?id=<?=$v['id']?>" class="button2">Editar</a></td>
          </tr>
          <?php endwhile; ?>
      </tbody>
  </table>
<?php include('footer.php'); ?>