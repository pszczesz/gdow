<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabliczka mnożenia</title>
        <link rel="stylesheet" href="cw3.css"/>
    </head>
    <body>
        <h1>Tabliczka mnożenia</h1>
        <h3>Pętla for</h3>
        <table>
            <?php
            $col = 4;
            $row = 4;
            for ($i = 1; $i <= $row; $i++) {
                $pp = $i % 2 === 0 ? "class='add'" : "";
                echo "<tr {$pp}>\n";
                for ($j = 1; $j <= $col; $j++) {
                    $result = $i * $j;
                    $first = ($i === 1 || $j === 1) ?
                            "class='first'" :
                            "";
                    echo "\t<td {$first}>{$result}</td>\n";
                }
                echo "</tr>\n";
            }
            ?>
        </table>

        <h3>Pętla while...</h3>
        <p>
            <?php
            $suma = 0;
            while ($suma < 40) {
                $liczba = rand(1, 15);
                if ($liczba % 3 === 0) {
                    $znak = $suma === 0 ? "" : "+";
                    echo $znak . $liczba;
                    $suma += $liczba;
                }
            }
            echo '=' . $suma;
            ?>
        </p>
    </body>
</html>
