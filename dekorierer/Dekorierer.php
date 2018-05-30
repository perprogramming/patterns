<?php

abstract class Dekorierer implements Komponente
{

    private $dekorierteKomponente;

    public function __construct(Komponente $dekorierteKomponente)
    {
        $this->dekorierteKomponente = $dekorierteKomponente;
    }

    public function operation()
    {
        $this->dekorierteKomponente->operation();
    }

}



