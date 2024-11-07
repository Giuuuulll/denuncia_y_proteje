 <?php
 include "03102024.2.php";

 if (isset($_SESSION["nombre"])){
    echo "hola{$_SESSION["nombre"]},bienvenido";

 }else{
    echo "ve el inicio y registrate..."
 }