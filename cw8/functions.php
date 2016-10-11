<?php

function Uczestnicy() {
    return [
        ["Jan", "Nowak", "23432343561","3a"],
        ["Monika", "Gryk", "67342343561","2a"],
        ["Heniek", "Turecki", "23782343561","4a"],
        ["Adam", "Kwas", "24562343561","3a"],
        ["Renata", "Rygiel", "45321343561","2a"],
        ["Szymon", "Musiał", "76542343561","3a"],
        ["Alojzy", "Urych", "76892343561","3a"],
        ["Jadwiga", "Urych", "45672343561","3a"],
        ["Teresa", "Urych", "45672343561","2a"],
        ["Alojzy", "Urych", "45672343561","2a"],
    ];
}

function GenerTab(array $dane) {
    $html = "<table>\n";
    $html .= '<tr><th>Lp</th><th>Imię</th>'
            . '<th>Nazwisko</th><th>Pesel</th>'.
            '<th>Klasa</th></tr>'."\n";
    $licznik = 0;
    for ($i = 0; $i < count($dane); $i++) {
        $licznik++;
        $mark = $licznik%2==0 ? "class='mark'":"";
        $html .= "\t<tr {$mark}><td class='right'>{$licznik}</td>" .
        "<td>{$dane[$i][0]}</td>" .
        "<td>{$dane[$i][1]}</td>" .
        "<td>{$dane[$i][2]}</td>"
        . "<td>{$dane[$i][3]}</tr>\n" ;
    }
    $html .= "</table>";
    return $html;
}
function GenerList(array $dane){
    $html = '<ol>'."\n";
    foreach ($dane as $row) {
        $html .= "<li><span class='mark'>{$row[1]}</span>"
        . " {$row[0]} <span class='red'>{$row[2]}</span>"
        . " {$row[3]}</li>\n";
    }
    $html .= "</ol>\n";
    return $html;
}