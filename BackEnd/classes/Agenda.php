<?php

    //Classe Agenda
    class Agenda {
        //Atributos
        private $ID_agenda;
        private $Data;
        private $Itens;
        private $Ano_Letivo;
        
        //Métodos
        //Método construtor: __construct()
        public function __construct($ano_letivo = null) {
            $this->ID_agenda = uniqid();
            $this->Data = date('Y-m-d');
            $this->Itens = array();
            $this->Ano_Letivo = $ano_letivo;
        }//Fim do método construtor()

        //Método addItem()
        public function addItem(Reserva $r) {
            $this->Itens[] = $r;
        }//Fim do método addItem()

        //Método getItens()
        public function getItens() {
            return $this->Itens;
        }//Fim do método getItens()

        //Método getData()
        public function getData() {
            return $this->Data;
        }//Fim do método getData()

        //Método getAno_letivo()
        public function getAno_letivo() {
            return $this->Ano_Letivo;
        }//Fim do método getAno_letivo()

    }//Fim da classe Agenda
?>