<?php 

require_once('ItemInteresseConcreto.php');
require_once('ObservadorConcretoA.php');
require_once('ObservadorConcretoB.php');

$subject = new ItemInteresseConcreto();

$first_object = new ObservadorConcretoA();
$subject->attach($first_object);
$second_object = new ObservadorConcretoB();
$subject->attach($second_object);

$subject->inicializar();
$subject->finalizar();


