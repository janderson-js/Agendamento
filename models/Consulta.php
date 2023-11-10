<?php

class Consulta{

    private int $id;
    private Paciente $paciente;
    private Funcionario $funcionario;
    private DateTime $data_hora;
    private Servico $servico;
    private string $descricao;
    
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getPaciente(): Paciente
    {
        return $this->paciente;
    }

    public function setPaciente(Paciente $paciente): self
    {
        $this->paciente = $paciente;

        return $this;
    }

    public function getFuncionario(): Funcionario
    {
        return $this->funcionario;
    }

    public function setFuncionario(Funcionario $funcionario): self
    {
        $this->funcionario = $funcionario;

        return $this;
    }

    public function getDataHora(): DateTime
    {
        return $this->data_hora;
    }

    public function setDataHora(DateTime $data_hora): self
    {
        $this->data_hora = $data_hora;

        return $this;
    }

    public function getServico(): Servico
    {
        return $this->servico;
    }

    public function setServico(Servico $servico): self
    {
        $this->servico = $servico;

        return $this;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }
}