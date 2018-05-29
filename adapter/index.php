<?php

$klient = new Klient();
$dienst = new Dienst();

$klient->moechteEtwasMachenMit($dienst); // Geht nicht!

$klient->moechteEtwasMachenMit(
    new Adapter(
        $dienst
    )
);



