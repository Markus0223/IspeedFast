<?php

    //Classe Caracteristica
    class Caracteristica {
        //Atributos
        private $nome;
        private $valor;

        //Métodos
        //Método construtor - __construct()
        public function __construct ($nome, $valor) {
            $this->setNome($nome);
            $this->setValor($valor);
        }//Fim do método construtor - __construct()

        //Método setNome()
        public function setNome($nome) {
            $this->nome = $nome;
        }
        //Fim do método setNome()

        //Método getNome()
        public function getNome() {
            return $this->nome;
        }//Fim do método getNome()

        //Método setValor()
        public function setValor($valor) {
            $this->valor = $valor;
        }//Fim do método setValor()

        //Método getValor()
        public function getValor() {
            return $this->valor;
        }//Fim do método getValor()


    }//Fim da classe Caracteristica
?>