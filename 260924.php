<?php
include "03102024.2.php";
$nombre = $_POST["nombre"];
$contra = $_POST["contra"];


$sql= "SELECT id, nombre, mail FROM usuario where nombre = '$nombre' and contra = '$contra'";

$resultado = $conexion->query($sql);

$id = 0;
$nombre = "";
$mail= "";

if(
    $fila = $resultado->fetch_assoc()
){
    $id = $fila["id"];
    $nombre = $fila["nombre"];
    $mail = $fila["mail"];
    $SESSION ["nombre"] = $fila ["nombre"]
}
echo json_encode( [
    "id"=> $id,
    "nombre"=> $nombre,
    "correo"=> $mail
]);



