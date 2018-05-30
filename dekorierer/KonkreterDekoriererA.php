<?php

class KonkreterDekoriererA extends Dekorierer
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


