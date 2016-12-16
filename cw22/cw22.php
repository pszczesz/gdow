<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Wykorzystanie sesji</h1>
        <?php
        session_start();
        if(!isset($_SESSION['licznik'])){
            $_SESSION['licznik']=0;
        }
        $_SESSION['licznik']++;
        echo "<h3>Ilość odwiedzin: {$_SESSION['licznik']}</h3>";
        ?>
    </body>
</html>
