<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        var_dump($_POST);
        //if(isset($_POST['a']))
        if (filter_has_var(INPUT_POST, 'a') && filter_has_var(INPUT_POST, 'b')) {
            $a = filter_input(INPUT_POST, 'a');
            $b = filter_input(INPUT_POST, 'b');
            //$a = floatval(....)  121.67   0
            if (filter_var($a, FILTER_VALIDATE_FLOAT) === false ||
                    filter_var($b, FILTER_VALIDATE_FLOAT) === false) {
                echo '<p>Błędne lub brak danych</p>';
            } else {
                $dzia3lanie = filter_input(INPUT_POST, 'dzialanie');
                switch ($dzialanie) {
                    case '1':
                        echo "<p>{$a} + {$b} = " . ($a + $b) . "</p>\n";
                        break;
                    case '2':
                        echo "<p>{$a} - {$b} = " . ($a - $b) . "</p>\n";
                        break;
                    case '3':
                        echo "<p>{$a} * {$b} = " . ($a * $b) . "</p>\n";
                        break;
                    case '4':
                        $wynik = $b != 0 ? round($a / $b, 2) : "Brak wyniku";
                        echo "<p>{$a} / {$b} = " . $wynik . "</p>\n";
                        break;
                    default:
                        echo "<p>Błedne działanie</p>\n";
                        break;
                }
            }
        } else {
            echo '<p>Błędne lub brak danych</p>';
        }
        ?>
        <p>
            <a href="cw12.html">Powrót do formularza</a>
        </p>
    </body>
</html>
