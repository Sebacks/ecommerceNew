<?php

class Envio
{
    private $id, $tipoEnvio, $cantidad, $coordenadasEnvio, $ubicacionEnvio, $estado;

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
    public function getTipoEnvio()
    {
        return $this->tipoEnvio;
    }

    /**
     * @param mixed $tipoEnvio
     */
    public function setTipoEnvio($tipoEnvio): void
    {
        $this->tipoEnvio = $tipoEnvio;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad): void
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return mixed
     */
    public function getCoordenadasEnvio()
    {
        return $this->coordenadasEnvio;
    }

    /**
     * @param mixed $coordenadasEnvio
     */
    public function setCoordenadasEnvio($coordenadasEnvio): void
    {
        $this->coordenadasEnvio = $coordenadasEnvio;
    }

    /**
     * @return mixed
     */
    public function getUbicacionEnvio()
    {
        return $this->ubicacionEnvio;
    }

    /**
     * @param mixed $ubicacionEnvio
     */
    public function setUbicacionEnvio($ubicacionEnvio): void
    {
        $this->ubicacionEnvio = $ubicacionEnvio;
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