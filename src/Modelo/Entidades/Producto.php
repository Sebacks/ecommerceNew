<?php

class Producto
{
    private $id, $nombre, $descripcion, $urlImagen, $precio,$cantDisponible,$fechaCreacion,$estado,$idLocalidad,$descuento,$hasDescuento;

    /**
     * @return mixed
     */
    public function getHasDescuento()
    {
        return $this->hasDescuento;
    }

    /**
     * @param mixed $hasDescuento
     */
    public function setHasDescuento($hasDescuento): void
    {
        $this->hasDescuento = $hasDescuento;
    }

    /**
     * @return mixed
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * @param mixed $descuento
     */
    public function setDescuento($descuento): void
    {
        $this->descuento = $descuento;
    }

    /**
     * @return mixed
     */
    public function getIdLocalidad()
    {
        return $this->idLocalidad;
    }

    /**
     * @param mixed $idLocalidad
     */
    public function setIdLocalidad($idLocalidad): void
    {
        $this->idLocalidad = $idLocalidad;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * @param mixed $fechaCreacion
     */
    public function setFechaCreacion($fechaCreacion): void
    {
        $this->fechaCreacion = $fechaCreacion;
    }

    /**
     * @return mixed
     */
    public function getCantDisponible()
    {
        return $this->cantDisponible;
    }

    /**
     * @param mixed $cantDisponible
     */
    public function setCantDisponible($cantDisponible): void
    {
        $this->cantDisponible = $cantDisponible;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getUrlImagen()
    {
        return $this->urlImagen;
    }

    /**
     * @param mixed $urlImagen
     */
    public function setUrlImagen($urlImagen): void
    {
        $this->urlImagen = $urlImagen;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

}