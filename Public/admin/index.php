<?php require_once('lib/data.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Administrador CMS</title>
  <link rel="stylesheet" href="css/botones.css">
</head>
<body>
  <div class="pure-menu custom-restricted-width">
	 <span class="pure-menu-heading">Menú</span>
    <div class="container"> <a href="page-contenido.php" class="btn"> <svg width="277" height="62"> <defs> <linearGradient id="grad1"> <stop offset="0%" stop-color="#FF8282"/> <stop offset="100%" stop-color="#E178ED" /> </linearGradient> </defs> <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect> </svg> <span>Contenido</span> </a> 
    <a href="page-consultar.php" class="btn2"> <svg width="277" height="62"> <defs> <linearGradient id="grad1"> <stop offset="0%" stop-color="#FF8282"/> <stop offset="100%" stop-color="#E178ED" /> </linearGradient> </defs> <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect> </svg> <span>Consultar</span> </a> 
     <a href="page-configuracion.php" class="btn3"> <svg width="277" height="62"> <defs> <linearGradient id="grad1"> <stop offset="0%" stop-color="#FF8282"/> <stop offset="100%" stop-color="#E178ED" /> </linearGradient> </defs> <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect> </svg> <span>Configuración</span> </a> 
    </div>


  </div>
 </body>
<?php include 'footer.php'; ?>