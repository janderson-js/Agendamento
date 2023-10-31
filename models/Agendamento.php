<?php

class Agendamento{
    
    private int $id;
    private Consulta $consulta;
    private DateTime $dataAgendamento;
    private string $titulo;
    private string $cor;
    private string $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getConsulta(): Consulta
    {
        return $this->consulta;
    }

    public function setConsulta(Consulta $consulta): self
    {
        $this->consulta = $consulta;

        return $this;
    }

    public function getDataAgendamento(): DateTime
    {
        return $this->dataAgendamento;
    }

    public function setDataAgendamento(DateTime $dataAgendamento): self
    {
        $this->dataAgendamento = $dataAgendamento;

        return $this;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getCor(): string
    {
        return $this->cor;
    }

    public function setCor(string $cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}