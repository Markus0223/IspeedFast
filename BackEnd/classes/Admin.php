<?php

    class Admin extends Usuario {
        private $Formacao;
        private $Acesso;

        public function __construct($formacao, $acesso) {
        
            $this->Formacao = $formacao;
            
            $this->Acesso = $acesso;
            
        }

        public function setFormacao($formacao) {
            if (is_string($formacao)) {
                $this->Formacao = $formacao;
            }
        }



        public function setAcesso($acesso) {
            if (is_string($acesso)) {
                $this->Acesso = $acesso;
            }
        }

        public function getFormacao() {
            return $this->Formacao;
        }


        public function getAcesso() {
            return $this->Acesso;
        }
    }
?>