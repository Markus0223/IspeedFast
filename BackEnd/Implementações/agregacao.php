<?php

    //Requisições de acesso
    require_once 'projeto 09.06\classes\recurso.php';
    require_once 'projeto 09.06\classes\Agenda.php';

    //Criação da Agenda - independente da criação de
    //Reservas
    $c1 = new Agenda;

    //Agregação dos Reservas na Agenda
    //A instanciação de Reserva ocorre na chamada
    //do método addItens
    $c1->addItem($p1 = new Reserva('DE46GR876', '10:00', '12:00', 'estudo coletivo', 'Breno Carrilo'));
    $c1->addItem($p1 = new Reserva('37FDF684G', '14:00', '16:00', 'trabalho de projeto', 'Cleyton Sampaio'));
    $c1->addItem($p1 = new Reserva('049KSD36P', '16:00', '18:00', 'aula estudantil', 'Neymar Jr'));

    //Exibição 
    //Início foreach()
    foreach ($c1->getItens() as $item) {
        print 'Hora de início: '.$item->getHora_Inicio()."<br>\n";
        print 'Hora de fim: '.$item->getHora_Fim()."<br>\n";
        print 'Responsável: '.$item->getUsuario()->getNome()."<br>\n";
    }//Fim foreach()

?>