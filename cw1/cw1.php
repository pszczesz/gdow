<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>   
        <body>           
        <?php 
       // phpinfo();
         $a = 12;
         $b = 23;
         echo '<p>'.$a.' + '.$b.' = '.($a+$b).'</p>';
         echo "<p>{$a} - {$b} = ".($a-$b)."</p>\n"; 
         echo "<p>{$a} * {$b} = ".($a*$b)."</p>\n";
         $wynik2 = $b!=0 ? round($a/$b,2) : "brak wyniku";
         if($b!=0){
             $wynik = round($a/$b,2);
         }else{
             $wynik = "nie dzielimy przez zero";
         }
         echo "<p>{$a} / {$b} = ".$wynik2."</p>\n"; 
        ?>           
    </body>
</html>
