<!doctype html>
<head>
<meta charset="utf-8">
<title>Servicios | Mercado Victoria S.A. | Bahía Blanca | Depósito y Logística</title>
<link rel="shortcut icon" href="activos/icono.png" /> 

<!-- Hojas de estilos -->
<link rel="stylesheet" media="screen" href="estilos/global.css" />
<link rel="stylesheet" media="screen" href="estilos/contacto.css" />
<meta name=viewport content="width=device-width, initial-scale=1">

<script leanguaje="javascript"> <!-- si no funca poner lenguaje en vez de src-->
var device = navigator.userAgent
 
if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
	
}else{
	window.location = "../contacto.php"; 
}

</script>

</head>

<body>
<?php include 'php/header.php'; ?>
<section>
  
  <div id="frase">Contacto</div>
  
  <a href="tel:02914563822" id="telefono">Llamar</a>
  
  
  <form id="formulario" action="php/enviar-consulta.php" method="post">
    <label class="label">Formulario de contacto</label>
    <input class="input" name="nombre" type="text" placeholder="Ingrese un nombre" maxlength="30" required>
    <input class="input" name="correo" type="email" placeholder="Ingrese su correo" maxlength="30" required>
    <input class="input" name="asunto" type="text" placeholder="Ingrese el asunto" maxlength="30" required>
    <textarea name="mensaje" rows="5" required class="input" placeholder="Ingrese su mensaje"></textarea>
  	<input class="boton" value="Enviar" type="submit">
  </form>
  
  
  <div class="titulo">Dirección</div>
  <div class="dato">Brickman 498</div>
  
  <div class="titulo">Email</div>
  <div class="dato">comercial@mvictoria.com.ar</div>
  
  <div class="titulo">Teléfono</div>
  <div class="dato">(0291) 4554296</div>
  
  

</section>
<?php include 'php/footer.php'; ?>
</body>
</html>