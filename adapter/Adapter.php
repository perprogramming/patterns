<?php

class Adapter implements Ziel
{

    private $dienst;

    public function __construct(Dienst $dienst)
    {
        $this->dienst = $dienst;
    }

    public function operation()
    {
        $this->dienst->service();
    }

}




