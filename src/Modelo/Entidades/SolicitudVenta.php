<?php

declare(strict_types=1);

namespace Entidades;

class SolicitudVenta
{
    public function __construct(
        private int $id,
        private string $descripcion,
        private string $fecha,
        private int $idUsuario,
        private int $idLocalidad
    ) {  $fecha = date("Y-m-d h:i:sa",strtotime($fecha));}

    public function getId(): int
    {
        return $this->id;
    }
    public function getIdUsuario(): int
    {
        return $this->idUsuario;
    }
    public function getIdLocalidad(): int
    {
        return $this->idLocalidad;
    }


    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->descripcion = $this->descripcion;
        $obj->fecha = $this->fecha;
        $obj->idUsuario = $this->idUsuario;
        $obj->idLocalidad = $this->idLocalidad;
        return $obj;
    }
}
