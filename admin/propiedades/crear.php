<?php
require '../../includes/funciones.php';
$auth = estadoAutenticado();

if(!$auth){
  header('Location: /indianapolis');
}

//Base de datos
require '../../includes/config/database.php';

$db = conectarDB();

//  if (!$db) {
//    echo "no se pudo conectar";
//  } else {
//    echo "se conecto";
//  }

//Consultar para obtener vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

//Arreglo con mensajes de errores
$errores = [];

$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedorId = '';

//Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre>";

  //  echo "<pre>";
  //  var_dump($_FILES);
  //  echo "</pre>";

  // exit;

  $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
  $precio = mysqli_real_escape_string($db, $_POST['precio']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
  $wc = mysqli_real_escape_string($db, $_POST['wc']);
  $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
  $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
  $creado = date('Y/m/d');

  //Asignar files hacia una variable
  $imagen = $_FILES['imagen'];

  if (!$titulo) {
    $errores[] = "Debes añadir un titulo";
  }

  if (!$precio) {
    $errores[] = "El precio es obligatorio";
  }

  if (strlen($descripcion) < 50) {
    $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
  }

  if (!$habitaciones) {
    $errores[] = "El numero de habitaciones es obligatorio";
  }

  if (!$wc) {
    $errores[] = "El numero de baños es obligatorio";
  }

  if (!$estacionamiento) {
    $errores[] = "El numero de estacionamientos es obligatorio";
  }

  if (!$vendedorId) {
    $errores[] = "Elige un vendedor";
  }

  if(!$imagen['name'] || $imagen['error']){
    $errores[] = "La imagen es obligatoria";
  }

  //Validar por tamaño
  $medida = 1000 * 1000;

  if($imagen['size'] > $medida){
    $errores[] = "La imagen es muy pesada";
  }

  //  echo "<pre>";
  //  var_dump($errores);
  //  echo "</pre>";

  // exit;

  //Revisar que el arreglo de errores este vacio
  if (empty($errores)) {

    /**Subida de archivos **/
    
    //Crear carpeta
    $carpetaImagenes = '../../imagenes/';
    
    if(!is_dir($carpetaImagenes)){
      mkdir($carpetaImagenes);
    }

    //Generar nombre unico
    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
    

    //Subir la imagen
    move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

    //Inserta en la base de datos
    $query = "INSERT INTO propiedades ( titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, vendedorId, creado ) 
      VALUES ( '$titulo', '$precio', '$nombreImagen', '$descripcion' , '$habitaciones', '$wc', '$estacionamiento', '$vendedorId', '$creado' )";

    // echo $query;
    if (mysqli_query($db, $query)) {
      //Redireccionar al usuario
      header("Location: /indianapolis/admin?resultado=1");
    } else {
      echo "Error" . $query . "<br>" . mysqli_error($db);
    }
  }
}


incluirTemplate('auxiliarHeader');
?>

<main class="contenedor seccion">
  <h1>Crear</h1>

  <a href="../" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>

  <?php endforeach; ?>
  <form class="formulario" method="POST" action="/indianapolis/admin/propiedades/crear.php" enctype="multipart/form-data">
    <fieldset>
      <legend>Informacion General</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
    </fieldset>

    <fieldset>
      <legend>Informacion Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" name="habitaciones" value="<?php echo $habitaciones; ?>">

      <label for="wc">Baños:</label>
      <input type="number" id="wc" placeholder="Ej: 3" min="1" name="wc" value="<?php echo $wc; ?>">

      <label for="estacionamiento">Estacionamientos:</label>
      <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1" name="estacionamiento" value="<?php echo $estacionamiento; ?>">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select name="vendedor">
        <option value="">
          <-- Seleccione -->
        </option>
        <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
          <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id'] ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
        <?php endwhile ?>
      </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>
</main>

<?php
incluirTemplate('auxiliarFooter');
?>