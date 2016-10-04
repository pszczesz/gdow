<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 8 - tablice wielowymiarowe</title>
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
            function Uczestnicy(){
                return [
                  ["Jan","Nowak","23432343561"],
                  ["Monika","Gryk","67342343561"],
                  ["Heniek","Turecki","23782343561"],
                  ["Adam","Kwas","24562343561"],
                  ["Renata","Rygiel","45321343561"],
                  ["Szymon","Musiał","76542343561"],
                  ["Alojzy","Urych","76892343561"],
                  ["Jadwiga","Urych","45672343561"],
                ];
            }
            function GenerTab(array $dane){
                $html = "<table>\n";
                
                $html .= "</table>";
                return $html;
            }
            echo "<h4>uczestnicy wycieczki</h4>\n";
            echo GenerTab(Uczestnicy());
        ?>
    </body>
</html>
