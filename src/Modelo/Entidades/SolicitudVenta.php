<?php

class SolicitudVenta
{
    private $id, $fechaSolicitud, $fechaAprovacion, $estado, $envio, $tipoVenta, $urlComprobante, $idEnvio, $idCliente;

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
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    /**
     * @param mixed $fechaSolicitud
     */
    public function setFechaSolicitud($fechaSolicitud): void
    {
        $this->fechaSolicitud = $fechaSolicitud;
    }

    /**
     * @return mixed
     */
    public function getFechaAprovacion()
    {
        return $this->fechaAprovacion;
    }

    /**
     * @param mixed $fechaAprovacion
     */
    public function setFechaAprovacion($fechaAprovacion): void
    {
        $this->fechaAprovacion = $fechaAprovacion;
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
    public function getEnvio()
    {
        return $this->envio;
    }

    /**
     * @param mixed $envio
     */
    public function setEnvio($envio): void
    {
        $this->envio = $envio;
    }

    /**
     * @return mixed
     */
    public function getTipoVenta()
    {
        return $this->tipoVenta;
    }

    /**
     * @param mixed $tipoVenta
     */
    public function setTipoVenta($tipoVenta): void
    {
        $this->tipoVenta = $tipoVenta;
    }

    /**
     * @return mixed
     */
    public function getUrlComprobante()
    {
        return $this->urlComprobante;
    }

    /**
     * @param mixed $urlComprobante
     */
    public function setUrlComprobante($urlComprobante): void
    {
        $this->urlComprobante = $urlComprobante;
    }

    /**
     * @return mixed
     */
    public function getIdEnvio()
    {
        return $this->idEnvio;
    }

    /**
     * @param mixed $idEnvio
     */
    public function setIdEnvio($idEnvio): void
    {
        $this->idEnvio = $idEnvio;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     */
    public function setIdCliente($idCliente): void
    {
        $this->idCliente = $idCliente;
    }

}