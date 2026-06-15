<?php

    class Lab extends Espaco {

        protected $Descricao_Lab;
        protected $Nome_lab;
        protected $Recursos;

        public function __construct($Status_Espaco, $ID_Espaco, $Capacidade, $Tipo_Espaco, $Descricao_Lab, $Nome_lab, $recursos) {
            parent::__construct($Status_Espaco, $ID_Espaco, $Capacidade, $Tipo_Espaco);
            $this->setDescricao_Lab( $Descricao_Lab );
            $this->setNome_lab( $Nome_lab );
            $this->setRecursos( $recursos );
        }

        public function setDescricao_Lab($Descricao_Lab) {
            if (is_string($Descricao_Lab)) {
                $this->Descricao_Lab = $Descricao_Lab;
            }
        }

        public function setNome_lab($Nome_lab) {
            if (is_string($Nome_lab)) {
                $this->Nome_lab = $Nome_lab;
            }
        }

        public function setRecursos($Recursos) {
            if (is_array($Recursos)) {
                $this->Recursos = $Recursos;
            }
        }

        public function getDescricao_Lab() {
            return $this->Descricao_Lab;
        }

        public function getNome_lab() {
            return $this->Nome_lab;
        }

         public function addRecurso($projetor, $computador, $Qntd_Carteira = 0) {
            $this->Recursos[] = new Recurso($projetor, $computador, $Qntd_Carteira);
        }
         public function getRecursos() {
            return $this->Recursos;
        }

    }



?>