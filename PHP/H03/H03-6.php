<?php


$clubs = [
    "De spartelkuikens" => 25,
    "De waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
];


echo '<table>';

foreach ($clubs as $naam => $leden) {
    echo '<tr>';
    echo '<td class="border">' . $naam . '</td>';
    echo '<td class="border">' . $leden. '</td>';
    $aantalPlaatjes = floor($leden / 5);
    echo '<td>';
    for ($i = 0 ; $i < $aantalPlaatjes ; $i++){
        echo '<img src="../IMG/zwemmer.png" width="30" height="30" alt="Zwemmer">';
    }
    echo '</td>';
    echo '</tr>';









}