<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Usuwanie rekordu</h1>
        <?php
        require_once 'functions.php';
        if(isset($_GET['k'])){
            $k=$_GET['k'];
            $users = GetAllFromFile('dane.txt');
            unset($users[$k]);
            SaveToFile($users, 'dane.txt');
//            echo '<pre>';
//            var_dump($users);
//            echo '</pre>';
        }
        ?>
        <a href="cw14.html">Powrót do formularza</a><br>
            <a href="getAll.php">Wyświetl wszystkich</a>
    </body>
</html>
