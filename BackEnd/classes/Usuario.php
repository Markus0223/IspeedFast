<?php

    class Usuario {
        
        private $ID;
        private $Nome;
        private $Telefone;
        private $Caracteristicas;
        private $Email;
        private $Tipo_Usuario;

        //se refere ao username do usuário.
        private $Usuario;
        private $Senha;

        public function __construct($nome,$telefone, $email, $senha) {
            $this->setNome($nome);
            $this->setTelefone($telefone);
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function setSenha($senha) {
            if (is_string($senha)) {
                $this->Senha = $senha;
            }
        }

        public function setEmail($email) {
            if (is_string($email)) {
                $this->Email = $email;
            }
        }

        public function setNome($nome) {
            if (is_string($nome)) {
                $this->Nome = $nome;
            }
        }

       

        public function setTelefone($telefone) {
            if (is_numeric($telefone)) {
                $this->Telefone = $telefone;
            }
        }


        public function getNome() {
            return $this->Nome;
        }

        public function getEmail() {
            return $this->Email;
        }

  

        public function getTelefone() {
            return $this->Telefone;
        }
        public function getSenha() {
            return $this->Senha;
        }

        public function setUsuario($usuario) {
            $this->Usuario = $usuario;
        }

        public function getUsuario() {
            return $this->Usuario;
        }

        public function addCaracteristica($nome, $valor) {
            $this->caracteristicas[] = new Caracteristica($nome, $valor);
        }

        public function getCaracteristicas() {
            return $this->caracteristicas;
        }

        
    }

?>