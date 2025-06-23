<?php

declare(strict_types=1);

namespace Entidades;

class Carrito
{
    public function __construct(
        private int $id,
        private int $idUsuario,
        private int $idProducto,
        private int $cantidad
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getIdUsuario(): int
    {
        return $this->idUsuario;
    }
    public function getIdProducto(): int
    {
        return $this->idProducto;
    }

    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->idUsuario = $this->idUsuario;
        $obj->idProducto = $this->idProducto;
        $obj->cantidad = $this->cantidad;
        return $obj;
    }
}
