<?php

class Conexion
{
    private $mysqli;

    function Ejecutar($query)
    {
        $servername ="localhost";
        $user="root";
        $pass="";
        $dbname ="prueba_ecommerce";

        if(!$this->mysqli=new mysqli($servername,$user,$pass,$dbname))
        {
            die('Error en conexion');
        }
        $this->mysqli->autocommit(TRUE);
        $resultado=$this->mysqli->query($query);
        return $resultado;
    }

    function Cerrar()
    {
        $this->mysqli->close();
    }
}