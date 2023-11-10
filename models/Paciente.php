<?php

class Paciente{

    private int $id;
    private string $nome;
    private string $dataNascimento;
    private string $genero;
    private string $telefone;
    private string $endereco;
    private string $email;
    private string $senha;
    private string $imagemPacienteURL;
    private InformacaoMedica $informacaoMedica;

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

    public function getDataNascimento(): string
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento(string $dataNascimento): self
    {
        $this->dataNascimento = $dataNascimento;

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

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function setGenero(string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getImagemPacienteURL(): string
    {
        return $this->imagemPacienteURL;
    }

    public function setImagemPacienteURL(string $imagemPacienteURL): self
    {
        $this->imagemPacienteURL = $imagemPacienteURL;

        return $this;
    }

    public function getInformacaoMedica(): InformacaoMedica
    {
        return $this->informacaoMedica;
    }

    public function setInformacaoMedica(InformacaoMedica $informacaoMedica): self
    {
        $this->informacaoMedica = $informacaoMedica;

        return $this;
    }
}