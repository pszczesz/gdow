<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="cw14.css"/>
    </head>
    <body>
        
        <?php
        require_once 'functions.php';
        $users = GetAllFromFile('dane.txt');
        //var_dump($users);
        echo ArrayToHtmlTab($users, ['imię','nazwisko','wiek']);
        ?>
        <div>
            <a href="cw14.html">Powrót do formularza</a><br>
            <a href="getAll.php">Wyświetl wszystkich</a>
        </div>
    </body>
</html>
