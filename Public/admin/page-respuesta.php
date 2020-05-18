<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Advertencia</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" href="css/advertencia.css">
</head>
   <body>
	<div class="contenedor">
		<form action="" class="form">
			<div class="form-header">
				<h1 class="form-title"><span><?= $_GET['response'] ?></span></h1>
			</div>
			<a href="<?= Config::URL.'admin' ?>" class="button">Regresar al menú</a>
		</form>
	</div>
</body>
<?php include 'footer.php' ?>