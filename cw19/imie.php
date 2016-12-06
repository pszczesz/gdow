<?php

class Imie {

    private $id;
    private $nazwa;
    private $opis;

    public function __construct($id, $nazwa, $opis) {
        $this->id = $id;
        $this->nazwa = $nazwa;
        $this->opis = $opis;
    }

    function getId() {
        return $this->id;
    }

    function getNazwa() {
        return $this->nazwa;
    }

    function getOpis() {
        return $this->opis;
    }

}
