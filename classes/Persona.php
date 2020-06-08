<?php
/*************************
 * CLASSE PADRE PERSONA  *
 ************************/
class Persona {
    public $nome;
    public $cognome;
    public $data_nascita;
    public $luogo_nascita;
    public $paga_oraria;
    // Costructor
    public function __construct($_nome, $_cognome, $_data_nascita, $_luogo_nascita, $_paga_oraria) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->data_nascita = $_data_nascita;
        $this->luogo_nascita = $_luogo_nascita;
        $this->paga_oraria = $_paga_oraria;
    }
    // Methods
    // Calcolo stipendo
    public function calcSalary($oreLavoroMensile) {
        if (! is_int($oreLavoroMensile)) {
            throw new Exception ('Operazione non riuscita');
        }
        return $this->paga_oraria * $oreLavoroMensile;
    }
    // Calcolo età
    public function age() {
        /*$currentYear = new DateTime();
        $date_of_birth = DateTime::createFromFormat("Y-m-d", $this->data_nascita);
        return  $currentYear->format("Y") - $date_of_birth->format("Y");*/
        $date = new DateTime($this->data_nascita);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
        //return $interval->format("%y");
    }
}
// Istanza di prova
//$persona = new Persona('mirco', 'cici', '2000-7-8', 'Arezzo', 20);
//var_dump($persona);
//echo $persona->age();
// Gestione dell'eccezione.
/*try {
    echo $persona->calcSalary(20);
}
catch (Exception $e) {
    // Soluzione 1
    //echo $e->getMessage();
    // Soluzione 2
    //header("Location: http://localhost/php-oop-dipendenti/error.php");
    // Soluzione 3
    //header("Location: http://localhost/php-oop-dipendenti/error.php?message={$e->getMessage()}");
    // Soluzione 4: Url dinamico
    $host = $_SERVER['HTTP_HOST'];
    $uri = dirname(dirname($_SERVER['PHP_SELF']));
    var_dump($uri);
    $page = 'error.php';
    header("Location: http://$host$uri/$page?message={$e->getMessage()}");
}*/