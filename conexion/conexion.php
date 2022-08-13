<?php

$servername = "localhost";
$database = "spa";
$username = "root";
$password = "deisy1305";



$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Conexion Fallo; " . mysqli_connect_error());
}
