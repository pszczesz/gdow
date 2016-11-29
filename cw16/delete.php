<?php
require_once 'baza.php'; 
if(isset($_POST['user'])){
    $id = intval($_POST['user']);
    $conn = GetConnection(MY_SRV, MY_USR, MY_PSWD, MY_DB);
    deleteUser($conn, $id);
    
    $conn->close();    
}
header("Location: cw16.php");

