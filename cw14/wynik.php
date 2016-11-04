<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['imie'])&&isset($_POST['nazwisko']) 
                && isset($_POST['wiek']) ){
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $wiek = intval($_POST['wiek']);
            if(!empty($nazwisko) && !empty($imie) && $wiek>0){
                $line = "{$imie}|{$nazwisko}|{$wiek}".PHP_EOL;
                $f = fopen("dane.txt", 'a');
                if($f){
                    fwrite($f, $line);
                    fclose($f);
                }else{
                    echo "<p>Bład zapisu</p>\n";
                }
            }
        }else{
            echo "<p>Błędne dane</p>\n";
        }
        ?>
        <div>
            <a href="cw14.html">Powrót do formularza</a><br>
            <a href="getAll.php">Wyświetl wszystkich</a>
        </div>
    </body>
</html>
