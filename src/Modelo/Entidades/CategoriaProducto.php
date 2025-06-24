<?php

declare(strict_types=1);

namespace Entidades;

class CategoriaProducto
{
    public function __construct(
        private int $id,
        private int $idCategoria,
        private int $idProducto
    ) {}

    // Getters
    public function getId(): int
    {
        return $this->id;
    }
    public function getIdCategoria(): int
    {
        return $this->idCategoria;
    }
    public function getIdProducto() : int
    {
        return $this->idProducto;
    }

    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->idCategoria = $this->idCategoria;
        $obj->idProducto = $this->idProducto;
        return $obj;
    }
}