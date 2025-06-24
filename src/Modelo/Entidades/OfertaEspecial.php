<?php

class OfertaEspecial
{
    private $id, $nombre, $razon, $urlImgCover, $urlImgTile, $tipoOferta, $tipoPublicidad, $idCategoria, $fechaInicio, $fechaFin, $precio;

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
    public function getRazon()
    {
        return $this->razon;
    }

    /**
     * @param mixed $razon
     */
    public function setRazon($razon): void
    {
        $this->razon = $razon;
    }

    /**
     * @return mixed
     */
    public function getUrlImgCover()
    {
        return $this->urlImgCover;
    }

    /**
     * @param mixed $urlImgCover
     */
    public function setUrlImgCover($urlImgCover): void
    {
        $this->urlImgCover = $urlImgCover;
    }

    /**
     * @return mixed
     */
    public function getUrlImgTile()
    {
        return $this->urlImgTile;
    }

    /**
     * @param mixed $urlImgTile
     */
    public function setUrlImgTile($urlImgTile): void
    {
        $this->urlImgTile = $urlImgTile;
    }

    /**
     * @return mixed
     */
    public function getTipoOferta()
    {
        return $this->tipoOferta;
    }

    /**
     * @param mixed $tipoOferta
     */
    public function setTipoOferta($tipoOferta): void
    {
        $this->tipoOferta = $tipoOferta;
    }

    /**
     * @return mixed
     */
    public function getTipoPublicidad()
    {
        return $this->tipoPublicidad;
    }

    /**
     * @param mixed $tipoPublicidad
     */
    public function setTipoPublicidad($tipoPublicidad): void
    {
        $this->tipoPublicidad = $tipoPublicidad;
    }

    /**
     * @return mixed
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * @param mixed $idCategoria
     */
    public function setIdCategoria($idCategoria): void
    {
        $this->idCategoria = $idCategoria;
    }

    /**
     * @return mixed
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * @param mixed $fechaInicio
     */
    public function setFechaInicio($fechaInicio): void
    {
        $this->fechaInicio = $fechaInicio;
    }

    /**
     * @return mixed
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * @param mixed $fechaFin
     */
    public function setFechaFin($fechaFin): void
    {
        $this->fechaFin = $fechaFin;
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


}