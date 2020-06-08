<?php 
// CLASSE PADRE PERSONE
include_once __DIR__ . '/Persona.php';
// CLASSE FIGLIA MAGAZZINIERE
class Magazziniere extends Persona {
    public $num_armadietto;
    public $mezzo_addetto;
    // Costructor
    public function __construct($_nome, $_cognome, $_data_nascita, $_luogo_nascita, $_paga_oraria, $_num_armadietto, $_mezzo_addetto) {
        parent::__construct($_nome, $_cognome, $_data_nascita, $_luogo_nascita, $_paga_oraria);
        $this->num_armadietto = $_num_armadietto;
        $this->mezzo_addetto = $_mezzo_addetto;
    }
}