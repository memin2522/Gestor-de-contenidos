<?php require_once('lib/data.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administrador CMS</title>
  <link rel="stylesheet" href="css/contenido.css">
</head>
<body>
  <?php  $datos = cargar_contenido($_GET[id]); ?>

<div class="contenedor">
  <form class="form" action="resultado_contenido.php" method="post" onsubmit="return false;">
    
	    
	    <div class="form-header">
	    <h1 class="form-title"><span>Contenido</span></h1>
		</div>

		 <input type="hidden" name="id" value="<?= $datos['id']?>" class="form-input"/>
	  
	    <label for="type" class="form-label">Tipo</label>
	    <select name="type" id="type" class="form-input">
		  <option value="">Seleccionar</option>
		  <?php $tipo = retornar_tipo_contenido(); ?>
		  <?php while(is_array($tipo) && list($k, $v) = each($tipo) ): ?>
		    <option value="<?= $k ?>" <?= ($k === $datos['tipo'] )? 'selected' : '' ?> ><?= $v ?></option>
		  <?php endwhile; ?>
	    </select>
	   
	    <label for="category" class="form-label">Categoría</label>
	    <select onchange="this.nextElementSibling.value=this.value" class="form-input">
			<option value=""></option>
			    <?php $options_category = cargar_datos_categoria() ?>
			    <?php while(is_array($options_category) && list($k, $v) = each($options_category) ): ?>
				  <option value="<?= $v['categoria'] ?>"><?= $v['categoria'] ?></option>
			    <?php endwhile; ?>
		</select>
		<input type="text" name="category" value="<?= $datos['categoria'] ?>" class="form-input" placeholder="Escriba la categoria" />
	    
	   
	    <label for="title" class="form-label">Titulo</label>
	    <input type="text" name="title" placeholder="Escriba el titulo" value="<?= $datos['titulo'] ?>" class="form-input">	  
	    
	    <label for="title" class="form-label">URL</label>
	    <input type="text" name="alias" value="<?= $datos['alias'] ?>" class="form-input"  placeholder="Escriba el url">
	   
	    <label for="type" class="form-label">Contenido</label>
	    
	    <div class="adjoined-bottom">
		  <div class="grid-container">
			  <div class="grid-width-100">
				  <div id="editor">
				    <?= urldecode($datos['contenido']) ?>
				  </div>
			  </div>
		  </div>
	    </div>
	    
	    <input type="hidden" name="content" id="content" class="form-input">
	   
	    <button type="submit" id="send" class="button">Guardar</button>
   
</form>
</div>
<?php include 'footer.php'; ?>