<?php

class Conexion
{
    private $mysqli;

    function Ejecutar($query)
    {
        $name="119320322";
        $user="119320322";
        $pass="No48!1wz5";

        if(!$this->mysqli=new mysqli('localhost',$user,$pass,$name))
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