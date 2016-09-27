<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Statystyki zbioru</h1>
        <?php
        $licznik = 0;  $max = -PHP_INT_MAX; $min = PHP_INT_MAX;   $suma = 0;
        $liczba = 0;        
        do{
           $liczba = rand(0, 5);
           echo $liczba.' ';
           if($liczba!=0){
               $licznik++;
               $suma+=$liczba;
               if($liczba<$min) $min = $liczba;
               if($liczba>$max) $max = $liczba;
           }
        }while($liczba!=0);        
        if($licznik==0){
            echo "<p>Brak danych</p>";
        }else{
            echo "<p>Ilość liczb: {$licznik}</p>";
            echo "<p>Suma liczb: {$suma}</p>";
            echo "<p>Maksymalna liczba: {$max}</p>";
            echo "<p>Minimalna liczba: {$min}</p>";
            echo '<p>Średnia liczb: '.round($suma/$licznik,2).'</p>';
        }
        ?>
        <h1>Instrukcje sterujące break i continue</h1>
        <?php
        for($i=0;$i<10;$i++){
            echo "<p> Przed ifem: i = {$i}</p>\n";
            if($i>5){
                continue;//break;
            }
            echo "<p> Po ifie: i = {$i}</p>\n";
        }
        ?>
    </body>
</html>
