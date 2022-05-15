<?php

//Importar Conexion
require 'includes/config/database.php';
$db = conectarDB();

//Crear un email y password
$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);


//Query para crear el usuario
$query = "INSERT INTO usuarios ( email, password) VALUES ( '${email}', '${passwordHash}')";

echo $query;
//Agregarlo a la base de datos



if (mysqli_query($db, $query)) {
  //Redireccionar al usuario
  echo "Se agrego a la base de datos";
} else {
  echo "Error" . $query . "<br>" . mysqli_error($db);
}

