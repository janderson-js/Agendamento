<?php
class Funcionario{

    private int $id;
    private string $nome;
    private string $status;
    private string $matricula;
    private string $senha;
    private string $especializacao = array();
    private string $telefone;
    private string $endereco;
    private string $imagemFuncionarioURL;
    

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

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

    public function getMatricula(): string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getImagemFuncionarioURL(): string
    {
        return $this->imagemFuncionarioURL;
    }

    public function setImagemFuncionarioURL(string $imagemFuncionarioURL): self
    {
        $this->imagemFuncionarioURL = $imagemFuncionarioURL;

        return $this;
    }

    public function getEspecializacao(): string
    {
        return $this->especializacao;
    }

    public function setEspecializacao(string $especializacao): self
    {
        $this->especializacao = $especializacao;

        return $this;
    }
}