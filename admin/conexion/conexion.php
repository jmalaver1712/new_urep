<?php


define('DB_HOST','localhost');
// define('DB_HOST','104.152.109.121');
define('DB_USER','campusvi_campus');
define('DB_PASS','campus_urep.2016');
define('DB_NAME','campusvi_pag_urep');
define('DB_CHARSET','utf-8');

class Conexion{
    protected $_db;
    public function __construct(){
        $this->_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ( $this->_db->connect_errno ){
            echo "Fallo al conectar a MySQL: ". $this->_db->connect_error;
            return;    
        }
        $this->_db->set_charset(DB_CHARSET);
        $this->_db->query("SET NAMES 'utf8' ");
    }
}




?>