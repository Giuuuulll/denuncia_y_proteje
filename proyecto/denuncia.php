<?php
$tipo_de_incidente=$_POST["tipo_de_incidente"];
$descripcion_detallada = $_POST["descripcion_detallada"];
$fecha_y_hora = $_POST["fecha_y_hora"];
$ubicacion_exacta =$_POST["ubicacion_exacta"];
$archivos_adjuntos =$_FILES["archivos_adjuntos"];
$archivos_adjuntos = $archivos_adjuntos["name"];
$archivo = $_FILES["archivos_adjuntos"]["tmp_name"];

$conexion=new mysqli("localhost" ,"root", "","proyecto1");

$sql = "INSERT INTO proyectogiul
(tipo_incidente, descripcion_detallada , fecha_hora, ubicacion_exacta, archivos_adjuntos)
VALUES 
('$tipo_de_incidente','$descripcion_detallada', '$fecha_y_hora', '$ubicacion_exacta','$archivos_adjuntos')";
$conexion->query($sql);
if ($conexion->insert_id > 0){
    echo json_encode([
        "respuesta"=> "ok"
    ]);
}else{
    echo json_encode([
        "respuesta"=>"error"
    ]);
}
move_uploaded_file($archivo, "imagenes/".$archivos_adjuntos);
$conexion-> close();



