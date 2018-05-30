<?php

class KonkreterDekoriererB extends Dekorierer
{

    private $zusatzAttribut = 0;

    public function operation()
    {
        parent::operation();

        $this->zusatzAttribut++;
    }

}


