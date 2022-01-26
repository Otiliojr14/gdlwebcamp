<?php include_once './includes/init.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&display=swap" rel="stylesheet">
    <?php 
        // Devuelve el nombre del archivo php
        $archivo = basename($_SERVER['PHP_SELF']);

        // Extraer la extension php del nombre del archivo
        $pagina = str_replace(".php", "", $archivo);
        
        if ($pagina == 'invitados' || $pagina == 'index') {
            echo '<link rel="stylesheet" href="./assets/css/colorbox.css">';
        } else if ($pagina == 'conferencia') {
            echo '<link rel="stylesheet" href="./assets/css/lightbox.css">';
        }       
    ?>   
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/computer.css" media="(min-width: 768px)">    
</head>
<body class="<?php echo $pagina; ?>-body">
    <!-- Sección Header -->
    <header class="index-header">
        <section class="header-cover">
            <nav class="header-social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-pinterest"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </nav>
            <section class="header-information">
                <p class="header-date"><i class="bi bi-calendar-event-fill"></i>10-12 Dic</p>
                <p class="header-place"><i class="bi bi-geo-alt-fill"></i>Guadalajara, MX</p>
            </section>
            <section class="header-title">
                <h1>GdlWebCamp</h1>
                <p>La mejor conferencia de <span>diseño web</span></p>
            </section>
        </section>
    </header>
    <!-- Fin Sección Header -->    
    <main class="index-main">
        <!-- Barra de navegación -->
        <nav class="bar-menu">
            <section class="content-bar">
                <figure class="logo-nav">
                    <a href="index.php">
                        <img src="./assets/img/logo.svg" alt="Logo GdlWebCamp">
                    </a>                    
                </figure>
                <section class="menu-movil">
                    <span></span>
                    <span></span>
                    <span></span>
                </section>
                <nav class="bar-navegacion">
                    <a href="conferencia.php" data-url="conferencia">Conferencia</a>
                    <a href="calendario.php" data-url="calendario">Calendario</a>
                    <a href="invitados.php" data-url="invitados">Invitados</a>
                    <a href="registro.php" data-url="registro">Reservaciones</a>
                </nav>
            </section>            
        </nav>