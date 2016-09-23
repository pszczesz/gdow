<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabliczka mnożenia</title>
        <link rel="stylesheet" href="cw3.css"/>
    </head>
    <body>
        <h1>Tabliczka mnożenia</h1>
        <table>
            <?php
            $col = 10;
            $row = 10;
            for ($i = 1; $i <= $row; $i++) {
                $pp = $i%2===0 ? "class='add'":"";
                echo "<tr {$pp}>\n";
                for ($j = 1; $j <= $col; $j++) {
                    $result = $i*$j;
                    $first = ($i===1 || $j===1) ?
                            "class='first'" :
                            "";
                    echo "\t<td {$first}>{$result}</td>\n";
                }
                echo "</tr>\n";
            }
            ?>
        </table>
    </body>
</html>
