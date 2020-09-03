<?php 
//indica la seccion
$pagina = 'empresa';

include_once "php/analyticstracking.php";

?>
<!doctype html>
<head>
<meta charset="utf-8">
<title>La Empresa | Mercado Victoria S.A. | Bahía Blanca | Depósito y Logística</title>
<link rel="shortcut icon" href="activos/icono.png" /> 
<meta name="description" content="Operadores logísticos y alquileres de depósitos en Bahía Blanca. Brindamos una respuesta eficiente y eficaz frente a los requerimientos de los clientes que cuentan con nuestro servicio de alquiler de depósitos y logística, utilizando la mejora continua como parte de nuestro día a día." />


<!-- Hojas de estilos -->
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xglobal.css" />
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xla-empresa.css" />
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xglobal.css" />
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xla-empresa.css" />
<link href='activos/EUROSTI.TTF' rel='stylesheet' type='text/css'>


<script leanguaje="javascript"> <!-- si no funca poner lenguaje en vez de src-->
var device = navigator.userAgent
 
if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
	window.location = "./m/la-empresa.php"; 
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
          <h1 class="titulo-slide">La Empresa</h1>
          <h3 class="subtitulo-slide">Historia<br>Misión<br>Visión</h3>
          <a href="la-empresa.php"> <img class="img-slide" src="activos/slider-1b.jpg" /> </a>
        </div>        
      </li>  
      <li class="item-slide">
        <div class="imagen-slide">
          <h1 class="titulo-slide">La Empresa</h1>
          <h3 class="subtitulo-slide">Historia<br>Misión<br>Visión</h3>
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
    <h4 class="titulo">Nuestra Historia</h4>
  
    <p class="historia">Nuestra empresa inicia sus actividades en el año 1997, operando de forma creciente como depósito logístico para empresas del Polo Petroquímico de la ciudad, en el almacenaje de productos terminados, materias primas y operando en la carga, descarga, fraccionamiento y transformación de las mismas.<br>

Estas tareas se desarrollan en las instalaciones de calle Donado 1090 de Bahía Blanca, sucesivamente las instalaciones se acondicionan y adecuan a las demandas crecientes del mercado (ampliaciones e infraestructura). Al presente se han diversificado los productos almacenados y las empresas que operan con nuestro depósito logístico.</p>

    <h4 class="titulo">Misión</h4>
  
    <p class="historia">Brindamos una respuesta eficiente y eficaz frente a los requerimientos de los clientes que cuentan con nuestro servicio de depósito y logística, utilizando la mejora continua como parte de nuestro día a día. </p>


    <h4 class="titulo">Visión</h4>
  
    <p class="historia">Ser la empresa líder en soluciones integrales de servicios de depósitos y logística en Bahía Blanca, incorporando la distribución a todo el centro y sur de nuestro país. Ganando la confianza plena de TODOS nuestros clientes, proveedores y empleados.</p>
  
    <h4 class="titulo">Valores</h4>
  
      <ul class="servicios">
        <li>Confianza y libertad de acción en todos los niveles de la organización.</li>
        <li>Orientación a los resultados y a la satisfacción del cliente.</li>
		<li>Responsabilidad social mediante un comportamiento ético y de compromiso con la comunidad.</li>
		<li>Motivación permanente al progreso e innovación</li>
		<li>Respeto por el medio ambiente</li>
      </ul>
      
  </div>
</section>


<?php include('php/footer.php'); ?>

</body>
</html>