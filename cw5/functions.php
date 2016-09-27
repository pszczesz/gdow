<?php
function Licz($arg1, $arg2) {
    echo "<p> Suma: {$arg1} + {$arg2} = "
    . ($arg1 + $arg2) . "</p>\n";
    echo "<p> Różnica: {$arg1} - {$arg2} = "
    . ($arg1 - $arg2) . "</p>\n";
}
function Wizytowka($imie, $nazwisko, $wiek) {
    echo '<span class="ramka">';
    echo "Imię: {$imie} Nazwisko: {$nazwisko}" .
    " wiek: {$wiek}</span>";
}
function Wizytowka2($imie, $nazwisko, $wiek) {
    $tekst = '<span class="ramka">' .
            "Imię: {$imie} Nazwisko: {$nazwisko}" .
            " wiek: {$wiek}</span>";
    return $tekst;
}
function Lista($tekst, $ile){
    $html = "<ol>\n";
    for($i=0 ; $i<$ile ;$i++){
        $html .= "\t<li>{$tekst}</li>\n";
    }
    $html .= "</ol>\n";// $html = $html . "</ol>\n";
    return $html;
}
function Podzielne($przez_ile,$ilosc){
    
}
