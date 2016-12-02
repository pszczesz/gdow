<?php

class Czlowiek{
    protected $imie;
    protected $nazwisko;
    protected $wiek;
    
    public function __construct($imie, $nazwisko, $wiek) {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->wiek = $wiek;
    }
    public function getImie() {
        return $this->imie;
    }
    public function getNazwisko() {
        return $this->nazwisko;
    }
    public function getWiek() {
        return $this->wiek;
    }
    public function info(){
        $html = "<div class='info'>";
        $html .= $this->imie." ".$this->nazwisko." wiek: ".$this->wiek;
        return $html."</div>\n";
    }

}

