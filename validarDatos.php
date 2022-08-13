<?php
require_once('conexion/conexion.php');


$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];


echo $nombre;
echo $telefono;
echo $asunto;
echo $correo;
echo $comentario;


//INSERTAR EN LA BASE DE DATOS
$sql = "INSERT INTO contactos (id, nombre, telefono, asunto, correo, comentario)
VALUES (NULL, '$nombre','$telefono', '$asunto', '$correo', '$comentario')";

//redireccionar a la pagina contacto otra vez

if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: contacto.php");
