<?php

class Invitado extends DbTable {

    protected static $db_table = "invitados";
    protected static $db_table_fields = array('nombre_invitado', 'apellido_invitado', 'descripcion', 'url_imagen');
    protected static $db_table_fields_type = 'ssss';
    protected static $db_id = 'invitado_id ';

    protected $invitado_id;
    protected $nombre_invitado;
    protected $apellido_invitado;
    protected $descripcion;
    protected $url_imagen;

}