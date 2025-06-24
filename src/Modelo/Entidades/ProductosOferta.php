<?php

class ProductosOferta
{
    private $id, $idProducto, $idOfertaEspecial, $descuento, $estado;

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
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * @param mixed $idProducto
     */
    public function setIdProducto($idProducto): void
    {
        $this->idProducto = $idProducto;
    }

    /**
     * @return mixed
     */
    public function getIdOfertaEspecial()
    {
        return $this->idOfertaEspecial;
    }

    /**
     * @param mixed $idOfertaEspecial
     */
    public function setIdOfertaEspecial($idOfertaEspecial): void
    {
        $this->idOfertaEspecial = $idOfertaEspecial;
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

}