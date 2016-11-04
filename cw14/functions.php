<?php

function ArrayToHtmlTab(array $dane, array $headers,$isEdit=false){
    $html = "<table>\n";
    $html .= "<tr>";
    foreach ($headers as $item) {
        $html .= "<th>{$item}</th>";
    }
    $html .= "<th></th></tr>\n";
    foreach ($dane as $key=>$row) {
        $html .= "<tr>";
        foreach ($row as $item) {
            $html .= "<td>{$item}</td>";
        }
        $html .= "<td><a href='edit.php?k={$key}'>edytuj</a>"
             . " <a href='delete.php?k={$key}'>usuń</a></td></tr>\n";
    }
    
    return $html."</table>";
}
function GetAllFromFile($filename){
        $dane = file($filename, FILE_IGNORE_NEW_LINES);
        $users = [];
        foreach ($dane as $row) {
           $users[]= explode('|', $row); 
        }
        return $users;
}
function SaveToFile(array $dane,$filename){
    $text = "";
    foreach ($dane as $row) {
        $text .= implode('|', $row).PHP_EOL;
    }
    file_put_contents($filename, $text);
}
