<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 8 - tablice wielowymiarowe</title>
        <link href="cw8.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Ćwiczenie 8 - tablice wielowymiarowe</h1>
        <h3>Wstęp</h3>
        <pre>
            <?php
            $t1 = [2,67,"ala",[5,8,9,"Bolek",[4,6,7]]];
            print_r($t1);
            print_r( $t1[3]);
            echo $t1[3][3];
            $t1[3][3]="Lolek";
            print_r($t1);
            
            function TabMnozenia($rows,$cols){
                $result = [];
                for($i=1;$i<=$rows;$i++){
                    for($j=1;$j<=$cols;$j++){
                        $result[$i][$j]=$i*$j;
                    }
                }
                return $result;
            }
            print_r(TabMnozenia(3, 6));
            ?>
        </pre>
        <h3>Wycieczka</h3>
        <?php
            require_once 'functions.php';
            echo "<h4>uczestnicy wycieczki</h4>\n";
            echo GenerTab(Uczestnicy());
        ?>
    </body>
</html>
