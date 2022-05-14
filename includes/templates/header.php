<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="build/css/app.css">
  <title>Indianapolis Inmobiliaria</title>
</head>
<body>
  
  <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
    <div class="contenedor contenido-header">
        <div class="barra">
          <a href="/indianapolis">
            <img src="build/img/Inmobiliaria_inianapolis_Sin_fondo.png" alt="" class="logo-header">
            <!--<img src="build/img/logo.svg" alt="Logotipo de Indianapolis">-->
            <!--<h1>Indianapolis <b>Inmobiliaria</b></h1>-->
          </a>
          <div class="mobile-menu">
            <img src="build/img/barras.svg" alt="barras responsive">
          </div>
          <div class="derecha">
            <img src="build/img/dark-mode.svg" alt="" class="dark-mode-boton">
            <nav class="navegacion">
              <a href="nosotros.php">Nosotros</a>
              <a href="anuncios.php">Anuncios</a>
              <a href="blog.php">Blog</a>
              <a href="contacto.php">Contacto</a>
              <!-- <a href="">Instagram</a>
              <a href="">Facebook</a> -->
            </nav>
          </div>
        </div><!--Cierre de Barra -->
    </div>
  </header>