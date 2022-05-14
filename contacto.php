<?php 
    require 'includes/funciones.php';
    
    incluirTemplate('header'); 
?>

  <main class="contenedor seccion">
    <h1>Contacto</h1>

    <picture>
      <source srcset="build/img/destacada3.webp" type="image/webp">
      <source srcset="build/img/destacada3.jpg" type="image/jpg">
      <img loading="lazy" src="build/img/destacada3.webp" alt="imagen contacto">
    </picture>

    <h2>Llene el formulario de contacto</h2>
    <form action="" class="formulario">
      <fieldset>
        <legend>Informacion Personal</legend>
        <label for="nombre">Nombre</label>
        <input type="text" placeholder="Tu nombre" id="nombre">

        <label for="email">E-mail</label>
        <input type="mail" placeholder="Tu E-mail" id="email">

        <label for="telefono">Telefono</label>
        <input type="tel" placeholder="Tu nombre" id="telefono">

        <label for="mensaje">Mensaje</label>
        <textarea name="" id="mensaje"></textarea>
      </fieldset>

      <fieldset>
        <legend>Informacion sobre la propiedad</legend>
        <label for="opciones">Vende o Compra:</label>
        <select name="" id="opciones">
          <option value="" disabled selected>--Selecione--</option>
          <option value="Compra">Compra</option>
          <option value="Vende">Vende</option>
        </select>

        <label for="presupuesto">Precio o presupuesto</label>
        <input type="numbre" placeholder="Tu Precio o Presupuesto" id="presupuesto">
      </fieldset>

      <fieldset>
        <legend>Contacto</legend>
        <p>Como desea ser contactado</p>
        <div class="forma-contacto">
          <label for="contactar-telefono">Telefono</label>
          <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

          <label for="contactar-email">E-mail</label>
          <input name="contacto" type="radio" value="email" id="contactar-email">
        </div>
        <p>Si eligio telefono, elija la fecha y la hora</p>

        <label for="fecha">Fecha</label>
        <input type="date" id="fecha">

        <label for="hora">Hora</label>
        <input type="time" id="hora" min="09:00" max="18:00">
      </fieldset>

      <input type="submit" value="Enviar" class="boton-verde">
    </form>
  </main>

<?php
        incluirTemplate('footer'); 
?>