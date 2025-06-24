<?php

declare(strict_types=1);

namespace Entidades;

class Producto
{
    public function __construct(
        private int $id,
        private string $nombre,
        private string $descripcion,
        private string $urlImagen,
        private int $precio,
        private int $cantDisponible,
        private string $fechaCreacion, 
        private bool $estado,
        private float $descuento,
        private bool $hasDescuento,
        private int $idLocalidad
    ) {
        //Se maneja asi por si acaso, para evitar errores con el tiempo.
        $fechaCreacion = date("Y-m-d h:i:sa",strtotime($fechaCreacion));
    }

    //getters y setters
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
    public function getHasDescuento() : mixed
    {
            return $this->hasDescuento;       
    }
    //si HasDescuento que se definira es falso, se define el descuento actual como 0 tambien.
    public function setHasDescuento(bool $hasDescuento)
    {
        if(!$hasDescuento)
        {
            $this->descuento = 0;

        };
        $this->hasDescuento = $hasDescuento;
    }

    public function getData() : \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->nombre = $this->nombre;
        $obj->descripcion = $this->descripcion;
        $obj->urlImagen = $this->urlImagen;
        $obj->precio = $this->precio;
        $obj->cantDisponible = $this->cantDisponible;
        $obj->fechaCreacion = $this->fechaCreacion;
        $obj->estado = $this->estado;
        $obj->descuento = $this->descuento;
        $obj->hasDescuento = $this->hasDescuento;
        $obj->idLocalidad = $this->idLocalidad;
        return($obj);
    }

}