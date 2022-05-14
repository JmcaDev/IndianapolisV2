<?php 
    require 'includes/funciones.php';
    
    incluirTemplate('header'); 
?>

  <main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>

    <div class="contenido-nosotros">
      <div class="imagen">
        <picture>
          <source srcset="build/img/nosotros.webp" type="image/webp">
          <source srcset="build/img/nosotros.jpg" type="image/jpg">
          <img loading="lazy"  src="build/img/nosotros.jpg" alt="Sobre Nosotros">
        </picture>
      </div>

      <div class="texto-nosotros">
        <blockquote>
          25 años de experiencia
        </blockquote>

        <p>
          INDIANAPOLIS INMOBILIARIA, es una empresa con probada experiencia en Asesoría de inversiones inmobiliarias, con productos  enfocados tanto en el ramo residencial como comercial, incluyendo galpones, locales comerciales, oficinas, centro de negocios y espacios flexibles de logística, manufactura para la pequeña y mediana industria, finca, terrenos agroindustrial y estructura de complejos hoteleros.
        </p>

        <p>
          Como organización somos un equipo humano y profesional que nos dedicamos a aportar soluciones de protección y diversificación de capitales, protegiendolos a través de inversiones en moneda estable, apoyados en un equipo altamente entrenado y especializado, ofreciendo seguridad, rapidez, confianza, ética, responsabilidad, tranquilidad, respaldo y satisfacción a todos nuestros clientes. Nuestro primordial objetivo es ser la solución inmobiliaria.
        </p>
      </div>
    </div>
  </main>

  <section class="contenedor seccion">
    <h1>Mas Sobre Nosotros</h1>
    <div class="iconos-nosotros"><!--Iconos-->
      <div class="icono">
        <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
        <h3>Seguridad</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam illum enim quae quod iure doloremque nihil dolore quidem. Optio, possimus architecto. Dolores aspernatur iste necessitatibus deserunt fugit commodi, repellat temporibus.</p>
      </div>
      <div class="icono">
        <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
        <h3>Precio</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam illum enim quae quod iure doloremque nihil dolore quidem. Optio, possimus architecto. Dolores aspernatur iste necessitatibus deserunt fugit commodi, repellat temporibus.</p>
      </div>
      <div class="icono">
        <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
        <h3>Tiempo</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam illum enim quae quod iure doloremque nihil dolore quidem. Optio, possimus architecto. Dolores aspernatur iste necessitatibus deserunt fugit commodi, repellat temporibus.</p>
      </div>
    </div><!--Cierre Iconos-->
  </section>

<?php
        incluirTemplate('footer'); 
?>