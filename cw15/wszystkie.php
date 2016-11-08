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
            echo "<p>Oglądanie wyników</p>\n";
            
            while($row = mysql_fetch_assoc($result)){
                echo "<p>{$row['towarid']} {$row['nazwa']}"
                . " {$row['cena']}</p>\n";
            }
            
           mysql_close($link);
        ?>
    </body>
</html>
