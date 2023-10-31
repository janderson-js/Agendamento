<?php

include "../dataBase/DataBase.php";
class PacienteDAO{
    private $conn;
    public function __construct()
    {
        $this->conn = DataBase::getInstance();
    }

    public function cadastrarPaciente(Paciente $paciente){
        $slqCadastrar = "INSERT pacientes INTO (nome, data_nascimento, genero, endereco, telefone, email) VALUES 
                                               (?, :data_nascimento, :genero, :endereco, :telefone, :email)";
        $stmt = $this->conn->getConexao()->prepare($slqCadastrar);
        $stmt->bindValue(":nome", $paciente->getNome(), PDO::PARAM_STR);
    }
}