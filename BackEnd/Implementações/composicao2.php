<?php
    require_once 'projeto 09.06\classes\Espaco.php';
    require_once 'projeto 09.06\classes\Lab.php';
    require_once 'projeto 09.06\classes\recurso.php';

    $l1 = new Lab('Disponivel', 'LAB01', 30, 'Laboratório de Informática', 'Lab de Informática', 'LAB01', array());
    $l1->addRecurso('Projetor Epson', 'Computador Dell', 7);
    print 'Recursos do Laboratório: ' .$l1->getNome_lab(). ': <br>';
    foreach ($l1->getRecursos() as $r) {
        print 'Recurso: Projetor - '.$r->getProjetor().', Computador - ' .$r->getComputador() .', Quantidade de Carteiras - ' .$r->getQntd_Carteira() .'<br>';
    }
    
?>