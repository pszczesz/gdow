<?php
require_once 'imie.php';
function getConnection($srv,$usr,$pswd,$db){
    $conn = new mysqli($srv, $usr, $pswd, $db);
    if($conn->connect_errno>0){
        die("Błąd połączenia: ".$conn->connect_error);
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}
function rowToObject(array $row){
    return new Imie($row['id'], $row['imie'], $row['opis']);
}
function getAllRecs($conn){
    if($conn){
        $dane = [];
        $sql = "SELECT * FROM imiona";
        $result = $conn->query($sql);
        while($row=$result->fetch_assoc()){
            $dane[] = rowToObject($row);
        }
        return $dane;
    }
    return [];
}