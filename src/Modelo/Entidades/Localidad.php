<?php

declare(strict_types=1);

namespace Entidades;

class Localidad
{
    public function __construct(
        private int $id,
        private string $nombre,
        private string $ubicacion,
        private string $coordenadas,
        private bool $estado
    ) {}

    public function getId() : int
    {
        return $this->id;
    }
    public function getEstado() : bool
    {
        return $this->estado;
    }
    public function setEstado(bool $estado)
    {
        $this->estado = $estado;
    }
    public function getUbicacion() : string
    {
        return $this->ubicacion;
    }
    public function setUbicacion(string $ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }
    public function getCoordenadas() : string
    {
        return $this->coordenadas;
    }
    public function setCoordenadas(string $coordenadas)
    {
        $this->coordenadas = $coordenadas;
    }

    public function getData() : \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->nombre = $this->nombre;
        $obj->ubicacion = $this->ubicacion;
        $obj->coordenadas = $this->coordenadas;
        $obj->estado = $this->estado;
        return $obj;
    }
}