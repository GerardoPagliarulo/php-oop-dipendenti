<?php
include_once __DIR__ . '/../classes/Magazziniere.php';
$magazzinieri = [
    ['Luigi', 'Marchi', '1990-2-15', 'Pisa', 7, 1, 'Muletto'],
    ['Lina', 'Lauda', '1991-1-2', 'Arezzo', 6, 2, 'Elevatore'],
];
$listaMagazzinieri = [];
foreach ($magazzinieri as $magazziniere) {
    $listaMagazzinieri[] = new Magazziniere(...$magazziniere);
}
//var_dump($listaMagazzinieri);