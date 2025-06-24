<?php

declare(strict_types=1);

namespace Entidades;

class Categoria
{
    public function __construct(
        private int $id,
        private string $nombre,
        private string $descripcion,
        private bool $estado
    ) {}

    // Getters y setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getEstado(): bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado)
    {
        $this->estado = $estado;
    }

    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->nombre = $this->nombre;
        $obj->descripcion = $this->descripcion;
        $obj->estado = $this->estado;
        return $obj;
    }
}