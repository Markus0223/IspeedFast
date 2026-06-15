<?php
    #Superclasse
    class Espaco {
        
        private $Status_Espaco;
        private $ID_Espaco;
        private $Capacidade;
        private $Tipo_Espaco;

        public function __construct($Status_Espaco, $ID_Espaco, $Capacidade, $Tipo_Espaco) {
            $this->setStatus_Espaco($Status_Espaco);
            $this->setID_Espaco($ID_Espaco);
            $this->setCapacidade($Capacidade);
            $this->setTipo_Espaco($Tipo_Espaco);
        }

        public function setStatus_Espaco($Status_Espaco) {
            if (is_bool($Status_Espaco)){
                $this->Status_Espaco = $Status_Espaco;
            }
        }

        public function setID_Espaco($ID_Espaco) {
            if (is_string($ID_Espaco)) {
                $this->ID_Espaco = $ID_Espaco;
            }
        }

        public function setCapacidade($Capacidade) {
            if (is_integer($Capacidade)) {
                $this->Capacidade = $Capacidade;
            }
        }

        public function setTipo_Espaco($Tipo_Espaco) {
            if (is_string($Tipo_Espaco)) {
                $this->Tipo_Espaco = $Tipo_Espaco;
            }
        }

        public function getStatus_Espaco() {
            return $this->Status_Espaco;
        }

        public function getID_Espaco() {
            return $this->ID_Espaco;
        }

        public function getCapacidade() {
            return $this->Capacidade;
        }

        public function getTipo_Espaco() {
            return $this->Tipo_Espaco;
        }

        
    }




?>