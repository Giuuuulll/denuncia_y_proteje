<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET["id"];
$conexion = new mysqli("localhost", "root", "", "proyecto1");
$sql = "SELECT id, tipo_incidente, descripcion_detallada, fecha_hora, ubicacion_exacta, archivos_adjuntos FROM proyectogiul where id = '$id'";
$resultado = $conexion->query($sql);
while ($fila = $resultado->fetch_assoc()) {
    echo "
    <article>
            <h3>{$fila["tipo_incidente"]}</h3>
            <div>
                <img src='imagenes/{$fila["archivos_adjuntos"]}' alt='{$fila["tipo_incidente"]}'>
            </div>
            <p>
                {$fila["descripcion_detallada"]}
            </p>     
        </article>";
} 
?>
</body>
</html>