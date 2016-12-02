<?php
require_once 'czlowiek.php';
require_once 'uczen.php';
class Repository{
    public static function getAllPeople(){
        return [
            new Czlowiek("Jan", "Nowak", 23),
            new Czlowiek("Anna", "Mąka", 25),
            new Czlowiek("Władysław", "Mazzol", 55),
            new Uczen("Gaweł","Małecki",17,4.5)
        ];        
    }
    public static function getAllStudents(){
        return[
            new Uczen("Danuta","Hajduk",17,4.0),
            new Uczen("Monika","Dudek",17,3.2),
            new Uczen("Adam","Grucha",17,2.5),
            new Uczen("Tomasz","Truk",17,4.0),
            new Uczen("Franciszek","Remek",17,5.5),
            new Uczen("Grażyna","Krykiet",17,5.9),
            new Uczen("Ryszard","Nowak",17,4.0),
            new Uczen("Danuta","Rypel",17,4.2),
        ];
    }
}
