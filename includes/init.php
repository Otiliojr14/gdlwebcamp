<?php

// Archivo de las funciones del proyecto
require_once __DIR__ . './functions/functions.php';

if (!file_exists(__DIR__ . './functions/config.php')) {
    die('ERROR:No existe config.php');
}

// Archivo de configuracion
require_once __DIR__ . './functions/config.php';

// Archivo del objeto de la base de datos
require_once __DIR__ . './classes/classDB.php';

// Establecer formato de región del sitio
setlocale(LC_ALL, IDIOMA_SITIO);
date_default_timezone_set(ZONA_HORARIA);

$conn = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

// Clases de las tablas del sistema
require_once __DIR__ . './classes/classDBTable.php';
require_once __DIR__ . './classes/classCategoriaEvento.php';
require_once __DIR__ . './classes/classInvitado.php';