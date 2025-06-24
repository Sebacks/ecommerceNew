<?php

declare(strict_types=1);

namespace Entidades;

class Dia
{
    public function __construct(
        private int $id,
        private string $nombre,
        private string $horaInicio,
        private string $horaFinal,
        private string $horaInicioAlmuerzo,
        private string $horaFinalAlmuerzo,
        private int $numero,
        private bool $estado
    ) {
        $horaInicio = date("Y-m-d h:i:sa",strtotime($horaInicio));
        $horaFinal = date("Y-m-d h:i:sa",strtotime($horaFinal));
        $horaInicioAlmuerzo = date("Y-m-d h:i:sa",strtotime($horaInicioAlmuerzo));
        $horaFinalAlmuerzo = date("Y-m-d h:i:sa",strtotime($horaFinalAlmuerzo));
    }

    // Getters y setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getEstado(): bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado)
    {
        $this->estado = $estado;
    }

    public function getData(): \stdClass
    {
        $obj = new \stdClass();
        $obj->id = $this->id;
        $obj->nombre = $this->nombre;
        $obj->horaInicio = $this->horaInicio;
        $obj->horaFinal = $this->horaFinal;
        $obj->horaInicioAlmuerzo = $this->horaInicioAlmuerzo;
        $obj->horaFinalAlmuerzo = $this->horaFinalAlmuerzo;
        $obj->numero = $this->numero;
        $obj->estado = $this->estado;
        return $obj;
    }
}
