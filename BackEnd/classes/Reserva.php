<?php
    
    class Reserva {

        private $ID;
        private $Hora_Inicio;
        private $Hora_Fim;
        private $Descricao;
        private $Status;
        private $Usuario;
        
        public function __construct($ID, $hora_inicio, $hora_fim, $descricao, $Status) {
            $this->setID($ID);
            $this->setHora_Inicio($hora_inicio);
            $this->setHora_Fim($hora_fim);
            $this->setDescricao($descricao);
            $this->setStatus($Status);
        }

        public function setID($ID) {
            if (is_numeric($ID)) {
                $this->ID = $ID;
            }  
        }
        public function setStatus($Status) {
            if (is_string($Status)) {
                $this->Status = $Status;
            }
        }

        public function setHora_Inicio($hora_inicio) {
                $this->Hora_Inicio = $hora_inicio;
        }

        public function setHora_Fim($hora_fim) {
                $this->Hora_Fim = $hora_fim;
        }

        public function setDescricao($descricao) {
            if (is_string($descricao)) {
                $this->Descricao = $descricao;
            }
        }
        
        public function getID() {
            return $this->ID;
        }

        public function getHora_Inicio() {
            return $this->Hora_Inicio;
        }

        public function getHora_Fim() {
            return $this->Hora_Fim;
        }

        public function getDescricao() {
            return $this->Descricao;
        }

        public function getStatus() {
            return $this->Status;
        }

        public function setUsuario($Usuario) {
            $this->Usuario = $Usuario;
        }

        public function getUsuario() {
            return $this->Usuario;
        }
        

    }


?>
