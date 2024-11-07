<?php
header("Content-Type: application/json");  
$nombre=$_POST["usuario"];
$contraseña = $_POST["contreseña"];

$conexion=new mysqli("localhost" ,"root", "","proyecto1");

$sql = "SELECT id, nombre FROM usuario WHERE nombre = '$nombre' and contrasenha = '$contraseña'";
$respuesta = $conexion->query($sql);
if($fila = $respuesta->fetch_assoc()) {
    include "sesion.php";
    $_SESSION["id"] = $fila["id"];
    $_SESSION["usuario"] = $fila["nombre"];
    $fila["respuesta"] = "ok";
    echo json_encode($fila);
}else{
    echo json_encode(
        ["respuesta" => "error"]
    );
}

?>
