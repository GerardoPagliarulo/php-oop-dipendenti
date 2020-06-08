<?php
include_once __DIR__ . '/../classes/Dirigente.php';
$dirigenti = [
    ['Marco', 'Cenci', '2000-12-25', 'Milano', 300, 11, 30],
    ['Luca', 'Cenci', '2002-10-21', 'Milano', 100, 10, 30],
];
$listaDirigenti = [];
foreach($dirigenti as $dirigente) {
    $listaDirigenti[] = new Dirigente(...$dirigente);
}
//var_dump($listaDirigenti);