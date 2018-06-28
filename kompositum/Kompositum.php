<?php

class Kompositum implements Komponente
{

    private $komponenten = array();

    public function fuegeHinzu(Komponente $komponente)
    {
        $this->komponenten[] = $komponente;
    }

    public function operation()
    {
        foreach ($this->komponenten as $komponente) {
            $komponente->operation();
        }
    }

}
