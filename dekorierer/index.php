<?php

$konkreteKomponente = new KonkreteKomponente();
$konkreteKomponente->operation();

$unterklassenbildung = new Unterklassenbildung(); // Vererbung starr
$unterklassenbildung->operation();

$konkreterDekoriererA = new KonkreterDekoriererA(
    $konkreteKomponente
);
$konkreterDekoriererA->operation();

$konkreterDekoriererB = new KonkreterDekoriererB(
    $konkreteKomponente
);
$konkreterDekoriererB->operation();



