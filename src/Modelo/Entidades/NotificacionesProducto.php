<?php

declare(strict_types=1);

namespace Entidades;

class NotificacionProducto
{
    public function __construct(
        private int $id,
        private int $idProducto,
        private int $idUsuario
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
        $obj->idProducto = $this->idProducto;
        $obj->idUsuario = $this->idUsuario;
        return $obj;
    }
}
