<?php 

require_once('ItemInteresse.php');

class ItemInteresseConcreto extends ItemInteresse {

    const INICIALIZADO = "INICIALIZADO";
    const FINALIZADO   = "FINALIZADO";

    public function notify(): void {
        echo "Subject: Notificando observers...<br/>" . PHP_EOL;
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function inicializar(): void {
        $this->estado = self::INICIALIZADO;
        $this->notify();
    }

    public function finalizar(): void {
        $this->estado = self::FINALIZADO;
        $this->notify();
    }
}