<?php 

class ObservadorConcretoA implements \SplObserver {

    public function update(\SplSubject $subject): void {
        echo self::class . ": reagindo ao evento! <br/>" . PHP_EOL;
    }
}