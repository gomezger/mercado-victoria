<?php 
//indica la seccion
$pagina = 'clientes';

include_once "php/analyticstracking.php";

 ?>
<!doctype html>
<head>
<meta charset="utf-8">
<title>Clientes | Mercado Victoria S.A. | Bahía Blanca | Depósito y Logística</title>
<link rel="shortcut icon" href="activos/icono.png" /> 
<meta name="description" content="Operadores logísticos y alquileres de galpones/depósitos. Grandes empresas de bahía nos han elegido." />

<!-- Hojas de estilos -->
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xglobal.css" />
<link rel="stylesheet" media="screen and (min-device-width: 1300px)" href="estilos/1200xclientes.css" />
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xglobal.css" />
<link rel="stylesheet" media="screen and (max-device-width: 1299px)" href="estilos/900xclientes.css" />
<link href='activos/EUROSTI.TTF' rel='stylesheet' type='text/css'>


<script leanguaje="javascript"> <!-- si no funca poner lenguaje en vez de src-->
var device = navigator.userAgent

if(device.match(/Windows Phone/i) || device.match(/windows ce/i)){
	window.location = "./m/clientes.php";
}else{
	if(device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i)){
		window.location = "./m/clientes.php";
	}
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
          <h1 class="titulo-slide">Clientes</h1>
          <h3 class="subtitulo-slide">Confianza<br>
          Éxito<br></h3>
          <a href="la-empresa.php"> <img class="img-slide" src="activos/slider-1b.jpg" /> </a>
        </div>        
      </li>  
      <li class="item-slide">
        <div class="imagen-slide">
          <h1 class="titulo-slide">Clientes</h1>
          <h3 class="subtitulo-slide">Confianza<br>
          Éxito<br></h3>
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
    <h1 class="titulo">Confiaron en Mercado Victoria S.A.</h1>  
    <div class="servicios">
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/logo-dow.png" title="Dow Argentina" /></div> 
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/logo-coopei.png" title="Cooperativa obrera" /></div>
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/logo-lucaioli.png" title="Humberto Lucaioli"/></div>
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/logo-coca-cola.png" title="Polar Argentina S.A."/></div>   
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/clientes/Centro-automotores.png" title="Centro Automotores S.A." /></div>
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/clientes/Corcel-Automotores.png" title="Corcel Automotores"/></div>
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/clientes/embotelladora-del-atlántico.png" title="Embotelladora del Atlantico S.A."/></div>
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/clientes/molino-canuelas.png" title="Molino Cañuelas" /></div>
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/clientes/pbb-polisur.png" title="PBB Polisur"/></div>
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/clientes/smurfit-kappa.png" title="Smurfit Kappa" /></div>
    <div class="logo-cliente"><img class="logo-cliente-img" src="activos/clientes/Solvay-indupa.png" title="Solvay Indupa"/></div>
    </div>
  </div>
</section>
<?php include('php/footer.php'); ?>

</body>
</html>