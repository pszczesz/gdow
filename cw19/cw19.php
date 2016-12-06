<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="cw19.css"/>
        <script type="text/javascript" src="cw19.js"></script>
    </head>
    <body>
        
        <?php
        require_once 'baza.php';
        $conn = getConnection("localhost", "imiona", "imiona", "imiona_gdow");
        $imiona = getAllRecs($conn);
        //var_dump($imiona);
        echo imieToSelect($imiona);
        echo "<br>";
        echo imionaToPar($imiona);
        ?>
       
    </body>
</html>
