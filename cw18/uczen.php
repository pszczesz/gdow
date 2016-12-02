<?php
require_once 'czlowiek.php';
class Uczen extends Czlowiek{
    private $srOcen;
    
    public function info() {
        $html = "<div class='info'>";
        $html .= $this->imie." ".$this->nazwisko." wiek: ".$this->wiek;
        return $html." Średnia ocen: {$this->srOcen}</div>\n";        
    }
    public function __construct($imie,$nazwisko,$wiek,$srOcen) {
        parent::__construct($imie, $nazwisko, $wiek);
        $this->srOcen = $srOcen;
    }
    public function getSrOcen() {
        return $this->srOcen;
    }



}
