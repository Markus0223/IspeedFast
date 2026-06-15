<?php

class Professor {
    private $Nome_Professor;
    private $Disciplina;
    private $ID_professor;

    public function __construct($nome, $disciplina, $id_professor) {
        $this->Nome_Professor = $nome;
        $this->Disciplina = $disciplina;
        $this->ID_professor = $id_professor;
    }

    public function setNome($nome) {
        if (is_string($nome)) {
            $this->Nome_Professor = $nome;
        }
    }

    public function setDisciplina($disciplina) {
        if (is_string($disciplina)) {
            $this->Disciplina = $disciplina;
        }
    }

    public function setID_professor($id_professor) {
        if (is_numeric($id_professor)) {
            $this->ID_professor = $id_professor;
        }
    }

    public function getNome() {
        return $this->Nome_Professor;
    }

    public function getDisciplina() {
        return $this->Disciplina;
    }

    public function getID_professor() {
        return $this->ID_professor;
    }
}

?>