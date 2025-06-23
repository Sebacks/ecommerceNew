<?php

declare(strict_types=1);

namespace Entidades;

class VentaDetalle
{
    public function __construct(
        private int $id,
        private int $idSolicitudVenta,
        private int $idProducto,
        private int $cantidad
    ) {}

    public function getId(): int
    {
        return $this->id;
    }
    public function getIdSolicitudVenta(): int
    {
        return $this->idSolicitudVenta;
    }
    public function getIdProducto(): int
    {
        return $this->idProducto;
    }


    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->idSolicitudVenta = $this->idSolicitudVenta;
        $obj->idProducto = $this->idProducto;
        $obj->cantidad = $this->cantidad;
        return $obj;
    }
}
