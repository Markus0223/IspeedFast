<?php

require_once 'projeto 09.06\classes\recurso.php';
require_once 'projeto 09.06\classes\Reserva.php';
require_once 'projeto 09.06\classes\Usuario.php';

$r1 = new Reserva(1234, '10:00', '12:00', 'reunião', 'Breno Carrilo');
$u1 = new Usuario('neymar', 40028922, 'neymarquezine@gmail.com', 'Neymarlesionado123');
//Usuario se refere ao Username.
$r1->setUsuario($u1);

print 'Hora de início: '.$r1->getHora_Inicio()."<br>\n";
print 'Hora de fim: '.$r1->getHora_Fim()."<br>\n";
print 'Nome do usuário: '.$r1->getUsuario()->getNome()."<br>\n";

?>