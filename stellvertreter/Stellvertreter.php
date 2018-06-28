<?php

class Stellvertreter implements Subjekt
{

    private $subjekt;

    public function __construct(Subjekt $subjekt = null)
    {
        $this->subjekt = $subjekt;
    }

    public function operation()
    {
        if (!$this->subjekt) { $this->subjekt = new RealesSubjekt(); }

        if (rand(0, 10) > 5) { $this->subjekt->operation(); }
    }

}


