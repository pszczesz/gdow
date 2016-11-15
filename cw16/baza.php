<?php
const MY_SRV = "localhost";
const MY_USR = "kurs";
const MY_PSWD = "kurs";
const MY_DB = "gdow_kursy";

function GetConnection($srv,$user,$pswd,$mydb){
    $conn = new mysqli($srv, $user, $pswd, $mydb);
    if($conn->connect_error){
        die("Error connection: ".$conn->connect_errno." "
                . $conn->connect_error);
    }
    $conn->query("SET NAMES utf8");
    return $conn;
}


