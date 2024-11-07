create database proyecto1,
create table proyectogiul(
    id INT AUTO_INCREMENT PRIMARY KEY ,  
    tipo_incidente TEXT NOT NULL, 
    descripcion_detallada TEXT NOT NULL,
    fecha_hora DATETIME NOT NULL,  
    ubicacion_exacta TEXT NOT NULL,
    archivos_adjuntos TEXT, 
);



