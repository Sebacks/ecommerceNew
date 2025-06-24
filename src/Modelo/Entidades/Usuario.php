<?php

class Usuario
{
    private $id, $nombre, $apellidos, $cedula, $correo, $estado, $twofa, $fechaCreacion, $idTipo, $idCarrito;

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
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellidos($apellido): void
    {
        $this->apellidos = $apellido;
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @param mixed $cedula
     */
    public function setCedula($cedula): void
    {
        $this->cedula = $cedula;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo): void
    {
        $this->correo = $correo;
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
    public function getTwofa()
    {
        return $this->twofa;
    }

    /**
     * @param mixed $twofa
     */
    public function setTwofa($twofa): void
    {
        $this->twofa = $twofa;
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
    public function getIdTipo()
    {
        return $this->idTipo;
    }

    /**
     * @param mixed $idTipo
     */
    public function setIdTipo($idTipo): void
    {
        $this->idTipo = $idTipo;
    }

    /**
     * @return mixed
     */
    public function getIdCarrito()
    {
        return $this->idCarrito;
    }

    /**
     * @param mixed $idCarrito
     */
    public function setIdCarrito($idCarrito): void
    {
        $this->idCarrito = $idCarrito;
    }



}