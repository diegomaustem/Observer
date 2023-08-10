<?php 

class ObservadorConcretoB implements \SplObserver {

    public function update(\SplSubject $subject): void {
        if($subject instanceof ItemInteresseConcreto && $subject->getEstado() == ItemInteresseConcreto::INICIALIZADO) {
            echo self::class . ": reagindo ao evento! <br/>" . PHP_EOL;
        }
    }
}