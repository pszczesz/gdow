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
         $b = 0;
         echo '<p>'.$a.' + '.$b.' = '.($a+$b).'</p>';
         echo "<p>{$a} - {$b} = ".($a-$b)."</p>\n"; 
         echo "<p>{$a} * {$b} = ".($a*$b)."</p>\n"; 
         if($b!=0){
             $wynik = $a/$b;
         }else{
             $wynik = "nie dzielimy przez zero";
         }
         echo "<p>{$a} / {$b} = ".$wynik."</p>\n"; 
        ?>           
    </body>
</html>
