<?php

declare(strict_types=1);

namespace Entidades;

class Envio
{
    public function __construct(
        private int $id,
        private int $estadoEnvio,
        private string $fecha,
        private int $idSolicitudVenta
    ) {$fecha = date("Y-m-d h:i:sa",strtotime($fecha));}

    public function getId(): int
    {
        return $this->id;
    }

    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->estadoEnvio = $this->estadoEnvio;
        $obj->fecha = $this->fecha;
        $obj->idSolicitudVenta = $this->idSolicitudVenta;
        return $obj;
    }
}
