<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="proteje.css">
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/confetti@3.0.3
    /tsparticles.confetti.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Denuncia Y Proteje</title>
</head>
<body>
    <header>
        <h1>Denuncia Y Proteje</h1>
        <nav>
            <ul>
                <li><a href="?page=home">Inicio</a></li>
                <li><a href="?page=about">Acerca de</a></li>
                <li><a href="?page=contact">Contacto</a></li>
                <li><a href="./denunciayproteje.html">formulario</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'home':
                $conexion = new mysqli("localhost", "root", "", "proyecto1");
                $sql = "SELECT id, tipo_incidente, descripcion_detallada, fecha_hora, ubicacion_exacta, archivos_adjuntos FROM proyectogiul";
                $resultado = $conexion->query($sql);
                while ($fila = $resultado->fetch_assoc()) {
                    echo "
                    
                    
                    <article>
                            <a href='./noticia.php?id={$fila["id"]}'><h3>{$fila["tipo_incidente"]}</h3></a>
                            <div>
                                <img src='imagenes/{$fila["archivos_adjuntos"]}' alt='{$fila["tipo_incidente"]}'>
                            </div>
                            <p>
                                {$fila["descripcion_detallada"]}
                            </p>     
                        </article>";
}
                break;
            case 'about':
                echo '<section><h2>Acerca de</h2><p>Esta es la página "Acerca de". Aquí puedes agregar información sobre ti o tu proyecto.</p></section>';
                break;
            case 'contact':
                echo '<section><h2>Contacto</h2><p>Esta es la página de contacto. Aquí puedes agregar información para que los usuarios se comuniquen contigo.</p></section>';
                break;
            default:
                echo '<section><h2>Bienvenido a Mi Sitio Web</h2><p>Esta es la página de inicio. Aquí puedes agregar contenido relevante sobre tu sitio web.</p></section>';
                break;
        }
        ?>
    </main>
    <script>
        const form = document.querySelector("form")
        form.addEventListener("submit", (ev) => {
            ev.preventDefault()
            fetch("denuncia.php",{
                method: "POST",
                body:new FormData(form)
            }).then(solicitud => solicitud.json())
            .then(
                resultado => {
                    if (resultado.respuesta == "error"){
                        confetti({
                            particleCount: 100,
                            spread: 70,
                            origin: { y: 0.6 },
                         }); 
                    }else{
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                            footer: '<a href="#">Why do I have this issue?</a>'
                    });
                }
            }
            
            )
           
        })
    </script>
    <footer>
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>