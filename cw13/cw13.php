<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Odczyt z pliku</title>
    </head>
    <body>
        <h1>Odczyt z pliku</h1>
        <?php
        $filename = "dane.txt";
        if(file_exists($filename)){
            $plik = fopen($filename, 'r');
            while(($line = fgets($plik))!=false){
                 echo '<p>'.$line.'</p>';
            }
           if(!feof($plik)){
               echo "<p>Bład podczas odczytu pliku</p>\n";
           }
            fclose($plik);
        }else{
            echo "Brak pliku";
        }
        $dane = "wyjscie.txt";
        $p2 = fopen($dane, 'a');
        require_once 'functions.php';
        if($p2){
            $klienci = GetAllCustomers();
            for($i=0;$i<count($klienci);$i++){
                fwrite($p2, $klienci[$i].PHP_EOL);
            }
            fclose($p2);
        }else{
            echo "<p>Błąd otwarcia pliku {$dane} do zapisu </p>\n";
        }
        ?>
    </body>
</html>
