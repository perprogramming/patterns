<?php

class Facade
{

    public function doSomething()
    {
        $c1 = new Class1();
        $c2 = new Class2();
        $c3 = new Class3();
        $c1->doStuff($c2);
        $c3->setX($c1->getX());
        return $c3->getY();
    }

}

