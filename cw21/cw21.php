<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>Przelicznia temperatur</legend>
                <input type="text" id="wartosc" name="wartosc"/>            
                <input type="radio" id="c" name="wybor" checked="" value="c"/>
                <sup>o</sup>C
                <input type="radio" name="wybor" id="f" value="f"/><sup>o</sup>F<br>
                <input type="submit" value="Oblicz"  id="oblicz"/>
            </fieldset>
        </form>
        <?php
        if (isset($_POST['wartosc'])) {
            if (is_numeric($_POST['wartosc'])) {
                $wartosc = floatval($_POST['wartosc']);
                $wybor = $_POST['wybor'];
                switch ($wybor) {
                    case 'c':
                        $wynik = $wartosc . " <sup>o</sup>C = " . round((9 / 5 * $wartosc + 32), 2)
                                . " <sup>o</sup>F";
                        break;
                    case 'f':
                        $wynik = $wartosc . " <sup>o</sup>F = " . round((5 / 9 * ($wartosc - 32)), 2)
                                . " <sup>o</sup>C";
                        break;
                    default:
                        $wynik = "brak danych";
                }
                echo "<p>" . $wynik . "</p>\n";
            } else {
                echo "<p>Błędne dane</p>\n";
            }
        }
        ?>
    </body>
</html>
