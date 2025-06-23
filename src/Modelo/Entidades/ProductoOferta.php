<?php

declare(strict_types=1);

namespace Entidades;

class ProductoOferta
{
    public function __construct(
        private int $id,
        private int $idProducto,
        private int $idOfertaEspecial
    ) {}

    public function getId(): int
    {
        return $this->id;
    }
    public function getIdProducto(): int
    {
        return $this->idProducto;
    }
    public function getIdOfertaEspecial(): int
    {
        return $this->idOfertaEspecial;
    }

    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->idProducto = $this->idProducto;
        $obj->idOfertaEspecial = $this->idOfertaEspecial;
        return $obj;
    }
}
