<?php 
    require 'includes/funciones.php';

    incluirTemplate('header',$inicio = true); 
?>

    <main class="contenedor seccion">
      <h1>Mas Sobre Nosotros</h1>
      <div class="iconos-nosotros">
        <!--Iconos-->
        <div class="icono">
          <img
            src="build/img/icono1.svg"
            alt="Icono seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Brindamos una asesoría personalizada con profesionales especialistas
            en la materia inmobiliaria y financiera. Disponemos de un personal
            calificado para brindarle asesoria sobre toda la documentación
            pertinente para llevar a cabo una transacción segura y sin
            contratiempos.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam illum
            enim quae quod iure doloremque nihil dolore quidem. Optio, possimus
            architecto. Dolores aspernatur iste necessitatibus deserunt fugit
            commodi, repellat temporibus.
          </p>
        </div>
        <div class="icono">
          <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
          <h3>Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam illum
            enim quae quod iure doloremque nihil dolore quidem. Optio, possimus
            architecto. Dolores aspernatur iste necessitatibus deserunt fugit
            commodi, repellat temporibus.
          </p>
        </div>
      </div>
      <!--Cierre Iconos-->
    </main>

    <section class="seccion contenedor">
      <h2>Casas y Apartamentos a la Venta</h2>
      <?php 
        $limite = 3;
        include 'includes/templates/anuncios.php';
      
      ?>      

      <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde"
          >Ver Todas Las Propiedades</a
        >
      </div>
    </section>

    <section class="imagen-contacto">
      <h2>Encuentra la Casa de tus Sueños</h2>
      <p>
        Llena el formulario de contacto y un asesor se pondra en contacto
        contigo a la brevedad
      </p>
      <a href="contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog1.webp" type="image/webp" />
              <source srcset="build/img/blog1.jpg" type="image/jpg" />
              <img
                src="build/img/blog1.jpg"
                alt="Texto Entrada Blog"
                loading="lazy"
              />
            </picture>
          </div>

          <div class="texto-entrada">
            <a href="entrada.php">
              <h4>Terraza en el techo de tu casa</h4>
              <p class="informacion-meta">
                Escrito el: <span>11/04/2022</span> por: <span>Admin</span>
              </p>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt
                voluptas architecto vel pariatur laboriosam.
              </p>
            </a>
          </div>
        </article>

        <article class="entrada-blog">
          <div class="imagen">
            <picture>
              <source srcset="build/img/blog2.webp" type="image/webp" />
              <source srcset="build/img/blog2.jpg" type="image/jpg" />
              <img
                src="build/img/blog2.jpg"
                alt="Texto Entrada Blog"
                loading="lazy"
              />
            </picture>
          </div>

          <div class="texto-entrada">
            <a href="entrada.php">
              <h4>Guia para la decoracion de tu hogar</h4>
              <p class="informacion-meta">
                Escrito el: <span>11/04/2022</span> por: <span>Admin</span>
              </p>

              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt
                voluptas architecto vel pariatur laboriosam.
              </p>
            </a>
          </div>
        </article>
      </section>

      <section class="testimoniales">
        <h3>Testimonios</h3>
        <div class="testimonial">
          <blockquote>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor
            quasi est delectus deserunt nostrum odio dolore accusamus enim dicta
            ex, dolores repellat neque similique veritatis voluptate nobis
            distinctio vero inventore.
          </blockquote>
          <p>- José Castillo</p>
        </div>
      </section>
    </div>

<?php
    incluirTemplate('footer'); 
?>
