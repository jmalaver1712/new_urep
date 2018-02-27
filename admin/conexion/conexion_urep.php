<?php


// define('DB_HOST','localhost');
define('DB_HOST_UREP','23.235.209.176');
define('DB_USER_UREP','urepub5_jh0n4t4n');
define('DB_PASS_UREP','b25s7}5&nCey');
define('DB_NAME_UREP','urepub5_emperor');
define('DB_CHARSET_UREP','utf-8');

class Conexion_urep{
    protected $db_urep;
    public function __construct(){
        $this->db_urep = new mysqli(DB_HOST_UREP, DB_USER_UREP, DB_PASS_UREP, DB_NAME_UREP);
        if ( $this->db_urep->connect_errno ){
            echo "Fallo al conectar a MySQL: ". $this->db_urep->connect_error;
            return;    
        }
        $this->db_urep->set_charset(DB_CHARSET_UREP);
        $this->db_urep->query("SET NAMES 'utf8' ");
    }
}




?>