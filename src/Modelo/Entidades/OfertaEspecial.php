<?php

declare(strict_types=1);

namespace Entidades;

class OfertaEspecial
{
    public function __construct(
        private int $id,
        private string $nombre,
        private string $asunto,
        private string $urlImgPromo,
        private string $urlRedireccion,
        private int $tipoOferta,
        private float $porcentaje,
        private float $precioCombo,
        private string $fechaInicio,
        private string $fechaFinal,
        private int $idCategoria
    ) {
        $fechaInicio = date("Y-m-d h:i:sa",strtotime($fechaInicio));
        $fechaFinal = date("Y-m-d h:i:sa",strtotime($fechaFinal));
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->nombre = $this->nombre;
        $obj->asunto = $this->asunto;
        $obj->urlImgPromo = $this->urlImgPromo;
        $obj->urlRedireccion = $this->urlRedireccion;
        $obj->tipoOferta = $this->tipoOferta;
        $obj->porcentaje = $this->porcentaje;
        $obj->precioCombo = $this->precioCombo;
        $obj->fechaInicio = $this->fechaInicio;
        $obj->fechaFinal = $this->fechaFinal;
        $obj->idCategoria = $this->idCategoria;
        return $obj;
    }
}
