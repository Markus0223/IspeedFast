<?php
    class Recurso {
        private $projetor;
        private $computador;
        private $Qntd_Carteira;

        public function __construct($projetor, $computador, $Qntd_Carteira) {
            $this->projetor = $projetor;
            $this->computador = $computador;
            $this->Qntd_Carteira = $Qntd_Carteira;
        }

        public function setProjetor($projetor) {
            $this->projetor = $projetor;
        }
        public function getProjetor() {
            return $this->projetor;
        }

        public function setComputador($computador) {
            $this->computador = $computador;
        }
        public function getComputador() {
            return $this->computador;
        }

        public function setQntd_Carteira($Qntd_Carteira) {
            $this->Qntd_Carteira = $Qntd_Carteira;
        }

        public function getQntd_Carteira() {
            return $this->Qntd_Carteira;
        }

    }
?>