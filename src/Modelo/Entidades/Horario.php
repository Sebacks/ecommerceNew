<?php

declare(strict_types=1);

namespace Entidades;

use stdClass;

class Horario
{
    public function __construct(
        private int $id,
        private string $nombre,
        private int $tipoHorario,
        private int $duracionHorario,
        private bool $isDefault,
        private bool $estado,
        private int $idLocalidad
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
    public function getData() : \stdClass
    {
        $obj = new stdClass();
        $obj->id = $this->id;
        $obj->nombre = $this->nombre;
        $obj->tipoHorario = $this->tipoHorario;
        $obj->duracionHorario = $this->duracionHorario;
        $obj->isDefault = $this->isDefault;
        $obj->estado = $this->estado;
        $obj->idLocalidad = $this->idLocalidad;
        return $obj;
    }
}