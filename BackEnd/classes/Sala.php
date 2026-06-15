<?php

        class Sala extends Espaco {

        private $ID_Sala;
        private $Recurso;

        public function __construct($ID_Sala, $Status_Espaco, $ID_Espaco, $Capacidade, $Recurso) {
            parent::__construct($Status_Espaco, $ID_Espaco, $Capacidade, $Tipo_Espaco = "Sala");
            $this->setID_Sala($ID_Sala);
            $this->setRecurso($Recurso);
        }

        public function setID_Sala($ID_Sala) {
            if(is_string($ID_Sala)) {
                $this->ID_Sala = $ID_Sala;
            }
        }

        public function setRecurso($Recurso) {
            if ($Recurso instanceof Recurso) {
                $this->Recurso = $Recurso;
            }
        }

        public function getRecurso() {
            return $this->Recurso;
        }

        public function getID_Sala() {
            return $this->ID_Sala;
        }

        public function addRecurso($projetor, $computador, $Qntd_Carteira = 0) {
            $this->Recurso = new Recurso($projetor, $computador, $Qntd_Carteira);
        }

    }


?>