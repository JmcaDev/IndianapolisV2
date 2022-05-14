<?php 
    require 'includes/funciones.php';
    
    incluirTemplate('header'); 
?>

  <main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoracion de tu hogar</h1>

    

    <picture>
      <source srcset="build/img/destacada2.webp" type="img/webp">
      <source srcset="build/img/destacada2.jpg" type="img/jpg">
      <img src="build/img/destacada2.jpg" alt="Imagen de la propiedad" loading="lazy">
    </picture>

    <p class="informacion-meta">Escrito el <span>12-4-2022</span> por <span>Admin</span></p>

    <div class="resumen-propiedad">

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur voluptates nesciunt vero nostrum omnis facere voluptatem dicta ullam qui, explicabo mollitia praesentium rem aliquid repellat saepe distinctio veniam corrupti ex? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione distinctio, laudantium harum tempore dignissimos consectetur facere nobis facilis enim eligendi rem at perspiciatis quos cum aut dolor vero laborum iure.</p>
    </div>
  </main>

<?php
        incluirTemplate('footer'); 
?>