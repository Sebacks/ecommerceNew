<?php

declare(strict_types=1);

namespace Entidades;

class Credenciales
{
    public function __construct(
        private int $id,
        private string $pass,
        private string $token,
        private int $idUsuario
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getIdUsuario(): int
    {
        return $this->idUsuario;
    }

    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->pass = $this->pass;
        $obj->token = $this->token;
        $obj->idUsuario = $this->idUsuario;
        return $obj;
    }
}
