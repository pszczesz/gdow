<?php
require_once 'baza.php';
if(isset($_POST['imie']) && isset($_POST['nazwisko'])){
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $kurs = intval($_POST['kursy']);
    if($imie=="" || $nazwisko==""){        
        header("Location: dodaj.php");
    }
    $conn = GetConnection(MY_SRV, MY_USR, MY_PSWD, MY_DB);
    addUser($imie,$nazwisko,$kurs,$conn);
    $conn->close();
    header("Location: cw16.php");
}
