<?php

include_once('lib/Programma.php');
include_once('lib/Liedje.php');

$ditprogramma = new Programma();
$ditprogramma->setNaam("mijn eerste programma");
$ditprogramma->setOmschijving("Even testen");

foreach ($ditprogramma->getProgramma() as $p) {
    echo $p . "<br>";
}

$ditprogramma->voegLiedjeToe(new Liedje("English Man In New York", "The Big Push"));
$ditprogramma->voegLiedjeToe(new Liedje("Für Elise", "Beethoven"));
$ditprogramma->voegLiedjeToe(new Liedje("Für Elise", "Elgar"));
$ditprogramma->voegLiedjeToe(new Liedje("Toccata and Fugue in D minor", "J.S. Bach"));
$ditprogramma->voegLiedjeToe(new Liedje("Morning Mood", " Edvard Grieg"));
$ditprogramma->voegLiedjeToe(new Liedje("Symphony No.5 in C minor", "Beethoven"));

foreach ($ditprogramma->getLiedjes() as $liedje) {
    echo "<br>" . $liedje->getTitel() . " - " . $liedje->getArtiest();
}