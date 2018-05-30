<?php

class Unterklassenbildung extends KonkreteKomponente
{

    public function operation()
    {
        parent::operation();

        $this->zusatzFunktion();
    }

    private function zusatzFunktion()
    {
    }

}



