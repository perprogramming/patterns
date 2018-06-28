<?php

class Abstraktion
{

    protected $implementierer;

    public function __construct(Implementierer $implementierer)
    {
        $this->implementierer = $implementierer;
    }

    public function operation() {
        $this->implementierer->implementiereDieOperation();
    }

}