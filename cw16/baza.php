<?php

const MY_SRV = "localhost";
const MY_USR = "kurs";
const MY_PSWD = "kurs";
const MY_DB = "gdow_kursy";

function GetConnection($srv, $user, $pswd, $mydb) {
    $conn = new mysqli($srv, $user, $pswd, $mydb);
    if ($conn->connect_error) {
        die("Error connection: " . $conn->connect_errno . " "
                . $conn->connect_error);
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}

function GetAllUser($conn) {
    $sql = "SELECT imie, nazwisko, nazwa FROM uczestnicy "
            . "INNER JOIN kursy on uczestnicy.kursid = kursy.kursid"
            . " ORDER by nazwisko";
    $result = $conn->query($sql);
    if ($result) {
        $dane = [];
        while ($row = $result->fetch_assoc()) {
            $dane[]=$row;
        }
        return $dane;
    }else{
        die("error connection");
    }
}
function uczestnicyToHtmlTab(array $dane){
    $html = "<table><tr><th>Imię</th><th>Nazwisko</th><th>Kurs</th></tr>";
    foreach ($dane as $item) {
        $html .= "<tr><td>{$item['imie']}</td><td>{$item['nazwisko']}</td>"
        . "<td>{$item['nazwa']}</td></tr>";
    }
    $html .= "</table>";
    return $html;
}
