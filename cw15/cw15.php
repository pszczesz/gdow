<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $link = mysql_connect('localhost','root','');
        if(!$link){
            die("Błąd połączenia". mysql_error());
        }
            echo "Udane połączenia";
            mysql_select_db('gdow2016',$link);
            mysql_query('set names utf8');
           
            $result = mysql_query('SELECT * FROM towary');
            echo '<pre>';
            var_dump($result);
            echo "<p>Oglądanie wyniku</p>\n";
            $row = mysql_fetch_row($result);
            var_dump($row);
            $row2 = mysql_fetch_assoc($result);
            var_dump($row2);
            echo '</pre>';
           mysql_close($link);
        ?>
        <a href="wszystkie.php">Pokaż wszystkie towary</a>
    </body>
</html>
