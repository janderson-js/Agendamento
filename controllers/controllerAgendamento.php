<?php
include "../dao/PacienteDAO.php";
include "../models/Paciente.php";

$pacienteDAO = new PacienteDAO();
$paciente = new Paciente();

$paciente->setNome("teste");
$paciente->setDataNascimento("2023-02-01");
$paciente->setGenero("masculino");
$paciente->setTelefone("213133");
$paciente->setEmail("asdasda");

$pacienteDAO->cadastrarPaciente($paciente);