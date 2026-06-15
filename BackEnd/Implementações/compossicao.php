<?php

require_once 'projeto 09.06\classes\Caracteristica.php';
require_once 'projeto 09.06\classes\Usuario.php';


echo '<h2>Composição Usuário - características</h2>';
$u1 = new Usuario('Gabriel','40028922', 'gabsfarias6@gmail.com', 'amominhaex123');

$u1->addCaracteristica('cor','pardo');
$u1->addCaracteristica('profissão','estudante');
$u1->addCaracteristica('curso','IPI');

print 'Caracteristicas de : ' .$u1->getNome(). ': <br>';
foreach ($u1->getCaracteristicas() as $c) {
    print 'caracteristicas: '.$c->getNome().'-' .$c->getValor() .'<br>';
}


?>