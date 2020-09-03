<?php 
//indica la seccion
$pagina = 'inicio';

include_once "php/analyticstracking.php";

?>
<!doctype html>
<head>
<meta charset="utf-8">
<title>Mercado Victoria S.A. | Alquiler de depósitos en Bahía Blanca | Servicios Logísticas</title>
<link rel="shortcut icon" href="activos/icono.png" /> 
<!--<meta name="description" content="Desde 1997 presentes en Bahía Blanca como operadores logísticos y alquiler de depósitos. Especializados en carga, descarga y almacenamiento de productos" />
--><meta name="description" content="Servicios Logísticos y Alquiler de depósitos en Bahía Blanca y la zona. Nos especializados en carga, descarga y almacenamiento de productos" />

<!-- Hojas de estilos -->
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xglobal.css">
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xindex.css">
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xglobal.css">
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xindex.css">

<link href='activos/EUROSTI.TTF' rel='stylesheet' type='text/css'>

<!-- JavaScript Slider -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="javaScript/responsiveslides.min.js"></script>
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


<script leanguaje="javascript"> <!-- si no funca poner lenguaje en vez de src-->
var device = navigator.userAgent

if(device.match(/Windows Phone/i) || device.match(/windows ce/i) || device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
{
	window.location = "./m/";
	
}else{
	
}

</script>

</head>

<body>
<?php include('php/header.php'); ?>
<section id="slider">
  <div class="contenedor-slide">
    <div class="callbacks_container">
      <ul class="rslides" id="slider4">
      <li class="item-slide">
        <div class="imagen-slide">
          <h1 class="titulo-slide">Alquiler de Depósitos</h1>
          <h2 class="subtitulo-slide">Especializados en carga, descarga y almacenamiento de productos.</h2>
          <a href="la-empresa.php"><img class="img-slide" src="activos/slider-1.jpg" /> </a>
        </div>        
      </li>  
      <li class="item-slide">
        <div class="imagen-slide">
          <h1 class="titulo-slide">Servicios Logísticos </h1>
          <h3 class="subtitulo-slide">Desde 1997 presentes en la ciudad como operadores logísticos.</h3>
          <a href="la-empresa.php"> <img class="img-slide" src="activos/slider-2.jpg" /> </a>
        </div>        
      </li>  
    </ul>
    </div> 
  </div> 
</section>
<section id="contenido">
  <div class="contenedor">
    <h2 id="frase">Eficiencia en movimiento</h2>
    <div id="informacion">
      <div class="info_caja">
        <img src="activos/vigilancia.jpg" width="100%" alt="Seguridad">
        <h3 class="titulo_info">Seguridad</h3>
        <p class="texto_info">Control de ingreso y egreso. Vigilancia 24hs 365 días del año.</p>
      </div>
      <div class="info_caja">
        <img src="activos/Instalaciones.jpg" width="100%" alt="Instalaciones">
        <h2 class="titulo_info">Alquiler de Depósitos</h2>
        <p class="texto_info">Nuestras instalaciones cuentan con más de 18.000m<sup>2</sup> de depósitos en alquiler y 20.000m<sup>2</sup> de playa de maniobras</p>
      </div>
      <div class="info_caja">
        <img src="activos/contacto.jpg" width="100%" alt="Contacto">
        <h4 class="titulo_info">Contáctenos</h4>
        <p class="texto_info">Estamos a su servicio por cualquier consulta que quiera realizarnos. Nuestra sección de <strong><a class="contacto_info" href="contacto.php">contacto</a></strong> lo está esperando</p>
      </div>
    </div>
  </div>
</section>
<section id="clientes">
  <div id="barra">Confiaron en nosotros</div> 
  <div class="contenedor">
    <div class="cliente"><img class="cliente_img" src="activos/logo-coca-cola.png" alt="Coca Cola" title="Coca Cola"></div>
    <div class="cliente"><a href="https://www.lucaioli.com.ar/store/" target="_blank"><img class="cliente_img" src="activos/logo-lucaioli.png" alt="Lucaioli" title="Lucaioli"></a></div>
    <div class="cliente"><a href="http://www.cooperativaobrera.coop/" target="_blank"><img class="cliente_img" src="activos/logo-coopei.png" alt="Cooperativa Obrera" title="Cooperativa Obrera"></a></div>
    <div class="cliente"><a href="http://www.dow.com/es/argentina" target="_blank"><img class="cliente_img" src="activos/logo-dow.png" alt="Dow Argentina" title="Dow Argentina"></a></div>
  </div>   
</section>
<section id="confianza">
  <div id="barra">Sitios sugeridos</div> 
  <div class="contenedor">
    <div class="amigos"><a href="https://www.jaquesoftware.com.ar/" target="_blank"><img class="cliente_img" src="activos/amigos/jaque.png"></a></div>
    <div class="amigos"><a href="http://rodadosdelsursa.com.ar/" target="_blank"><img class="cliente_img" src="activos/amigos/rodados-del-sur.png"></a></div>
    <div class="amigos"><a href="http://www.delabahiareciclados.com.ar/" target="_blank"><img class="cliente_img" src="activos/amigos/reciclados.png"></a></div>
    <div class="amigos"><a href="http://www.mitsubishi-victoria.com.ar/" target="_blank"><img class="cliente_img" src="activos/amigos/mitsubishi-mvsa.png"></a></div>
    <div class="amigos"><a href="http://mvservicios.com.ar/" target="_blank"><img class="cliente_img" src="activos/amigos/mvs.png"></a></div>
    <div class="amigos"><a href="http://www.motozone.com.ar/" target="_blank"><img class="cliente_img" src="activos/amigos/motozone.png"></a></div>
    <div class="amigos"><a href="http://taeguautomotores.com.ar/" target="_blank"><img class="cliente_img" src="activos/amigos/teagu.png"></a></div>
  </div>   
</section>


<?php include('php/footer.php'); ?>
</body>
</html>