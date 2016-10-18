<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'functions.php';
        $kolory = GetColors();
        echo "<pre>";
        print_r($kolory);
        echo "</pre>";
        foreach ($kolory as $key => $value) {
            echo "<p>klucz: {$key} wartość: {$value}</p>\n";
        }
        foreach ($kolory as $value) {
            echo "<p> wartość: {$value}</p>\n"; 
        }
        echo "<p>1 element: ".$kolory["czerwony"]."</p>\n";
        $k1 = "czerwony";
        if(array_key_exists($k1, $kolory)){
            echo "<p>1 element: ".$kolory[$k1]."</p>\n";
        }else{
            echo "<p>Brak klucza: ".$k1."</p>\n";
        }        
        ?>
        <h3>Select i kolory</h3>
        <?php
        echo GenerSelectFromArray(GetColors(),FALSE);
        ?>
    </body>
</html>
