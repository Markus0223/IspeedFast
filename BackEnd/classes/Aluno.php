<?php

    class Aluno extends Usuario {
        private $curso;
        private $anoIngresso;
        private $matricula;

        public function __construct ($curso, $anoIngresso, $matricula) {
            $this->setCurso($curso);
            $this->setAnoIngresso($anoIngresso);
            $this->setMatricula($matricula);
        }

        public function setCurso($curso) {
            $this->curso = $curso;
        }

        public function setAnoIngresso($anoIngresso) {
            $this->anoIngresso = $anoIngresso;
        }

        public function getCurso() {
            return $this->curso;
        }

        public function getAnoIngresso() {
            return $this->anoIngresso;
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }

        public function getMatricula() {
            return $this->matricula;
        }
    }

?>