<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'baza.php';
        $conn = getConnection("localhost", "imiona", "imiona", "imiona_gdow");
        $imiona = getAllRecs($conn);
        var_dump($imiona);
        
        ?>
        </pre>
    </body>
</html>
