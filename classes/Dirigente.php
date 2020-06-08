<?php 
// CLASSE PADRE PERSONE
include_once __DIR__ . '/Persona.php';
// CLASSE FIGLIA DIRIGENTE
class Dirigente extends Persona {
    public $num_ufficio;
    public $piano_edificio;
    // Costructor
    public function __construct($_nome, $_cognome, $_data_nascita, $_luogo_nascita, $_paga_oraria, $_num_ufficio, $_piano_edificio) {
        parent::__construct($_nome, $_cognome, $_data_nascita, $_luogo_nascita, $_paga_oraria);
        $this->num_ufficio = $_num_ufficio;
        $this->piano_edificio = $_piano_edificio;
    }
}