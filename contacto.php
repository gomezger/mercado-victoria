<?php 

//indica la seccion
$pagina = 'contacto';

include_once "php/analyticstracking.php";


?>
<!doctype html>
<head>
<meta charset="utf-8">
<title>Contacto | Mercado Victoria S.A. | Bahía Blanca | Depósito y Logística</title>
<link rel="shortcut icon" href="activos/icono.png" /> 
<meta name="description" content="Operadores logísticos y alquileres de galpones/depósitos. No pierdas el tiempo, ¿tenés alguna duda? Nuestra sección de contacto espera tu preguntas!" />


<script leanguaje="javascript"> <!-- si no funca poner lenguaje en vez de src-->
var device = navigator.userAgent

if(device.match(/Windows Phone/i) || device.match(/windows ce/i)){
	window.location = "./m/contacto.php";
}else{
	if(device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i)){
		window.location = "./m/contacto.php";
	}
}

</script>

<!-- Hojas de estilos -->
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xglobal.css" />
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xcontacto.css" />
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xglobal.css" />
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xcontacto.css" />
<link href='activos/EUROSTI.TTF' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="javaScript/responsiveslides.min.js"></script>



</head>

<body id="fondo">
<?php include('php/header.php'); ?>

<iframe id="mapa" src="https://www.google.com/maps/d/embed?mid=zmKLQY0evB3U.khPoMT0Ik9Vc" frameborder="0" style="border:0" allowfullscreen></iframe>
  
<section class="contenedor" >

  <div id="contenido">
    <form class="formulario" action="php/enviar-consulta.php" method="post" enctype="multipart/form-data">
      <?php 
	  if(@$_GET['envio']=='si')
	  	echo '<label class="label-error">Se envio el correo.</label>';
	  ?>  
      <?php 
	  if(@$_GET['error']=='enviar')
	  	echo '<label class="label-error">Error al enviar. Intente nuevamente.</label>';
	  ?>  
      <label class="label">Nombre <span class="requerido">*</span></label>
      <input class="input" name="nombre" type="text" maxlength="50" placeholder="Ingrese su nombre" value="<?php echo @$_GET['nombre']; ?>" required>
    
      <label class="label">Correo <span class="requerido">*</span></label>
      <input class="input" name="correo" type="email" maxlength="50" placeholder="Ingrese su correo" value="<?php echo $_GET['correo']; ?>" required>
    
      <label class="label">Asunto <span class="requerido">*</span></label>
      <input class="input" name="asunto" type="text" maxlength="80" placeholder="Ingrese su asunto" value="<?php echo $_GET['asunto']; ?>"required>
      
      <label class="label">Adjuntar imágenes, Word, Excel o PowerPoint.</label>
      <?php 
	  if(@$_GET['error']=='archivo')
	  	echo '<label class="label-error">El tipo de archivo es incorrecto.</label>';
	  ?>
      <input class="input" name="archivo" type="file">
      
      <label class="label">Mensaje</label>
      <textarea name="mensaje" rows="5" class="input" placeholder="Ingrese su mensaje"><?php echo $_GET['mensaje']; ?></textarea>
      
      <input class="enviar" type="submit" value="Enviar consulta">
    
    </form> 
    <div id="info-contacto">
      <div class="caja-contacto">
        <div class="contacto-icon" id="telefono"></div>
        <div class="contacto-titulo" >Teléfono</div>
        <div class="contacto-numero">(0291) 4554296</div>
      </div>
      <div class="caja-contacto">
        <div class="contacto-icon" id="correo"></div>
        <div class="contacto-titulo">Correo</div>
        <div class="contacto-numero">comercial@mvictoria.com.ar</div>
      </div>
      <div class="caja-contacto">
        <div class="contacto-icon" id="direccion"></div>
        <div class="contacto-titulo">Dirección</div>
        <div class="contacto-texto">Brickman 498</div>
      </div>
    </div>   
  </div>  
</section>

<?php include('php/footer.php'); ?>


</body>
</html>