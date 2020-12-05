<?php
DEFINE("DB_HOST","localhost");
DEFINE("DB_USER","root");
DEFINE("DB_PASS","");
DEFINE("DB","mrram");

Class Conectar
{
    public static function conexion()
    {
            return mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB);
    }
}

?>