<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <h1>Ćwiczenie 2 - Pętle</h1>
        <h3>Petla for</h3>
        <?php
        for($i=1; $i<=6;$i++){
            if($i%2==0){
                $kolor = "class='parzyste'";
            }else{
                $kolor = "class='nieparzyste'";
            }
            echo "<h{$i} {$kolor}>Nagłówek {$i}</h{$i}>\n";
        }
        ?>
    </body>
</html>
