<?php

class SpezAbstraktion extends Abstraktion
{

    public function operation() {
        print "Ich mache was anders...";
        $this->implementierer->implementiereDieOperation();
    }

}