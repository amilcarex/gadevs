<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    
<?php 
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);
if($pagina == 'invitados' || $pagina == 'index'){
    echo '<link rel="stylesheet" href="css/colorbox.css">';
} else if($pagina == 'conferencia'){
    echo '<link rel="stylesheet" href="css/lightbox.css">';
}
?>
    
    
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&family=PT+Sans:wght@400;700&family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina ?>"  >
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <header class="site-header">

        <div class="hero">

            <div class="contenido-header">
                <nav class="redes-sociales">

                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>

                <div class="informacion-evento flex">
                    <div class="datos-evento">
                        <p class="fecha margin"><i class="fas fa-calendar-day"></i> 05-02-2021</p>
                        <p class="ciudad margin"><i class="fas fa-map-marker-alt"></i> Anzoateguí, VE</p>
                    </div>
                    <div class="nombre-evento">
                        <h1 class="nombre-sitio">GA Devs</h1>
                        <p class="slogan">El mejor lugar para <span>Desarrollar tus ideas.</span></p>
                    </div>


                </div>


            </div>

        </div><!-- Hero-->


    </header>
    <div class="barra">
        <div class="contenedor flex">
            <div class="logo">
                <a href="index.php"><img src="img/logo.svg" alt="logo"></a>
            </div>
            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal">
                <a href="conferencia.php">Conferencia</a>
                <a href="calendario.php">Calendario</a>
                <a  href="invitados.php">Invitados</a>
                <a  href="registro.php">Reservaciones</a>
            </nav>
        </div><!-- Contenedor -->
    </div><!-- Barra -->