<?php

class CategoriaEvento extends DbTable {

    protected static $db_table = "categoria_evento";
    protected static $db_table_fields = array('cat_evento', 'icono');
    protected static $db_table_fields_type = 'ss';
    protected static $db_id = 'id_categoria';

    // Columnas de la tabla

    protected $id_categoria;
    protected $cat_evento;
    protected $icono;
    
}