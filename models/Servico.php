<?php

class Servico{
    
    private int $id;
    private string $nome;
    private string $descricao;
    private string $valor;
    private string $imagensURL = array();
    private string $videosURL = array();
    
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

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getValor(): string
    {
        return $this->valor;
    }

    public function setValor(string $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    public function getImagensURL(): string
    {
        return $this->imagensURL;
    }

    public function setImagensURL(string $imagensURL): self
    {
        $this->imagensURL = $imagensURL;

        return $this;
    }

    public function getVideosURL(): string
    {
        return $this->videosURL;
    }

    public function setVideosURL(string $videosURL): self
    {
        $this->videosURL = $videosURL;

        return $this;
    }
}