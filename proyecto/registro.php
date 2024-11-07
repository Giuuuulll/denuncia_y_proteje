<?php
header("Content-Type: application/json");  
$nombre=$_POST["usuario"];
$correo=$_POST["correo"];
$contraseña = $_POST["contreseña"];

$conexion=new mysqli("localhost" ,"root", "","proyecto1");

$sql = "INSERT INTO usuario (nombre, correo, contrasenha) VALUES ('$nombre', '$correo', '$contraseña')";
$respuesta = $conexion->query($sql);

echo json_encode([
"respuesta" => "registro"
]);


?>