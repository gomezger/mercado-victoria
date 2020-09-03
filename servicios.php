<?php 
//indica la seccion
$pagina = 'servicios';

include_once "php/analyticstracking.php";

 ?>
<!doctype html>
<head>
<meta charset="utf-8">
<title>Servicios | Mercado Victoria S.A. | Bahía Blanca | Depósito y Logística</title>
<link rel="shortcut icon" href="activos/icono.png" /> 
<meta name="description" content="Operadores logísticos y alquiler de depósitos en Bahía Blanca. Nuestra prioridad es acompañar al cliente en el crecimiento y desarrollo de su layout ideal, adecuando las propuestas a sus necesidades y las demandas del mercado, elaborando de modo conjunto el servicio “a medida” para cada ocasión." />

<!-- Hojas de estilos -->
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xglobal.css" />
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xservicios.css" />
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xglobal.css" />
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xservicios.css" />
<link href='activos/EUROSTI.TTF' rel='stylesheet' type='text/css'>


<script leanguaje="javascript"> <!-- si no funca poner lenguaje en vez de src-->
var device = navigator.userAgent
 
if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
	window.location = "./m/servicios.php"; 
}

</script>


<!-- JavaScript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="javaScript/responsiveslides.min.js"></script>
<script>
 $(function () {
	 // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 3000,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
</script>

</head>

<body>
<?php include('php/header.php'); ?>
<div class="contenedor">
<section id="slider">
  <div class="contenedor-slide">
    <div class="callbacks_container">
      <ul class="rslides" id="slider4">
      <li class="item-slide">
        <div class="imagen-slide">
          <h1 class="titulo-slide">Servicios</h1>
          <h2 class="subtitulo-slide">Logística<br>Alquiler<br>Depósitos<br></h2>
          <a href="la-empresa.php"> <img class="img-slide" src="activos/slider-1b.jpg" /> </a>
        </div>        
      </li>  
      <li class="item-slide">
        <div class="imagen-slide">
          <h1 class="titulo-slide">Servicios</h1>
          <h2 class="subtitulo-slide">Logística<br>Alquiler<br>Depósitos<br></h2>
          <a href="la-empresa.php"> <img class="img-slide" src="activos/slider-2b.jpg" /> </a>
        </div>        
      </li>  
    </ul>
    </div> 
  </div> 
</section>
</div>
<section id="contenido">
  <div class="contenedor">
    <h1 class="titulo">Mercado Victoria S.A.</h1>  
    <p class="historia">Nuestra prioridad es acompañar al cliente en el crecimiento y desarrollo de su layout ideal, adecuando las propuestas a sus necesidades y las demandas del mercado, elaborando de modo conjunto el servicio “a medida” para cada ocasión. Alquiler de depósitos y servicios logísticos.</p>

    <h4 class="titulo">Servicios Básicos</h4>
    <ul class="servicios">
        <li><h3>Alquiler de depósitos / galpones (mensual).</h3></li>
        <li><h3>Depósitos de 1500m<sup>2</sup></h3></li>
        <li><h3>Control de ingreso y egreso</h3></li>
		<li><h3>Vigilancia 24 hs los 365 días del año</h3></li>
		<li><h6>Playa de cargas descubierta de 12.000 m<sup>2</sup></h6></li>
		<li><h6>Playa de estacionamiento en espera para camiones</h6></li>
		<li><h6>Iluminación de áreas comunes y depósitos</h6></li>
      </ul>

    <h4 class="titulo">Servicios Adicionales</h4>
    <ul class="servicios">
        <li>Balanza para camiones certificada por INTI</li>
        <li>Autoelevadores de capacidad 2.5 tn. para operaciones</li>
		<li>Personal calificado para carga/descarga</li>
	    <li>Control y gestión de stocks e inventarios.</li>
     </ul>
      
    <h4 class="titulo">Fácil vinculación Ruta Nacional Nº3</h4>
    <div id="como-usar">Para ver las opciones del plano, haga clic en el icono: </div>
    <iframe class="mapa" src="https://www.google.com/maps/d/embed?mid=zmKLQY0evB3U.kFtbgtUwfnf8" width="100%" height="480"></iframe>
  </div>
</section>

<?php include('php/footer.php'); ?>

</body>
</html>