<?php 
$conexion = new mysql ("localhost", "root", "admin123", "proyecto1");

$sql ="SELECT id, nombre , contenido, fecha, autor FROM articulos ";

$resultado = $conexion->query($sql);

while ($fila = $resultado->fetch_assoc()){
    echo $fila["nombre"];
}
?>