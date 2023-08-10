<?php 

abstract class ItemInteresse implements \SplSubject {

    protected $estado;
    protected \SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage;
    }

    public function attach(\SplObserver $observer): void 
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void 
    {
        $this->observers->detach($observer);
    }

    public function getEstado() 
    {
        return $this->estado;
    }
}





















