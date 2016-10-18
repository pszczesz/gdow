<?php

function GetColors() {
    return [
        "biały" => "white",
        "czerwony" => "red",
        "czarny" => "black",
        "zielony" => "green"
    ];
}
function GetDays(){
    return [
        //todo
    ];
}

function GenerSelectFromArray(array $kolory, $isBykeys = TRUE) {
    $html = "<select id='sel'>\n";
    if ($isBykeys) {
        ksort($kolory);
        foreach ($kolory as $key => $value) {
            $html .= "<option value='{$value}'>{$key}</option>\n";
        }
    } else {
        asort($kolory);
        foreach ($kolory as $key => $value) {
            $html .= "<option value='{$key}'>{$value}</option>\n";
        }
    }
    $html .= "</select>\n";
    return $html;
}
