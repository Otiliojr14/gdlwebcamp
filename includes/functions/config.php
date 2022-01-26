<?php     

// Mostrar errores en la página
error_reporting( E_ALL );
ini_set('display_errors', 1 ); 

define('INCLUDES_PATH', 'http://localhost/gallery');

// Configuracion del formato de región
define('ZONA_HORARIA', 'America/Mexico_City');
define('IDIOMA_SITIO', ['es', 'spa', 'es_MX']);

// Valores para conectar a la base de datos

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'gdlwebcamp');