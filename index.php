<?php
include_once __DIR__ . '/personale/dirigenti.php';
include_once __DIR__ . '/personale/magazzinieri.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <title>php-oop-dipendenti</title>
</head>
<body>
    <header>
        <h1>Personale</h1>
    </header>
    <main>
        <div class="dirigenti">
            <h2>Dirigenti</h2>
            <ul>
                <?php foreach ($listaDirigenti as $dirigente) { ?>
                <li><h4><?php echo $dirigente->nome . ' ' . $dirigente->cognome; ?></h4></li>
                <li>Data di nascita: <?php echo $dirigente->data_nascita; ?></li>
                <li>Luogo di nascita: <?php echo $dirigente->luogo_nascita; ?></li>
                <li>Età: <?php echo $dirigente->age(); ?></li>
                <li>Paga oraria: <?php echo "$dirigente->paga_oraria €"; ?></li>
                <li>Stipendio mensile: 
                    <?php 
                    try {
                        echo "{$dirigente->calcSalary(20)} €"; 
                    }
                    catch (Exception $e) {
                        $host = $_SERVER['HTTP_HOST'];
                        $uri = dirname($_SERVER['PHP_SELF']);
                        $page = 'error.php';
                        header("Location: http://$host$uri/$page?message={$e->getMessage()}");
                    }
                    ?>
                </li>
                <li>Piano edificio: <?php echo $dirigente->piano_edificio; ?></li>
                <li>Numero ufficio: <?php echo $dirigente->num_ufficio; ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="magazzinieri">
            <h2>Magazzinieri</h2>
            <ul>
                <?php foreach ($listaMagazzinieri as $magazziniere) { ?>
                <li><h4><?php echo $magazziniere->nome . ' ' . $magazziniere->cognome; ?></h4></li>
                <li>Data di nascita: <?php echo $magazziniere->data_nascita; ?></li>
                <li>Luogo di nascita: <?php echo $magazziniere->luogo_nascita; ?></li>
                <li>Età: <?php echo $magazziniere->age(); ?></li>
                <li>Paga oraria: <?php echo "$magazziniere->paga_oraria €"; ?></li>
                <li>Stipendio mensile: 
                    <?php
                    try {
                        echo "{$magazziniere->calcSalary(200)} €"; 
                    }
                    catch (Exception $e) {
                        $host = $_SERVER['HTTP_HOST'];
                        $uri = dirname($_SERVER['PHP_SELF']);
                        $page = 'error.php';
                        header("Location: http://$host$uri/$page?message={$e->getMessage()}");
                    }
                    ?>
                </li>
                <li>Numero armadietto: <?php echo $magazziniere->num_armadietto; ?></li>
                <li>Mezzo assegnato: <?php echo $magazziniere->mezzo_addetto; ?></li>
                <?php } ?>
            </ul>
        </div>
    </main>
</body>
</html>