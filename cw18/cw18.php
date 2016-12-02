<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="cw18.css"/>
    </head>
    <body>
        <?php
        require_once 'repository.php';
        $dane = Repository::getAllPeople();
        foreach ($dane as $item) {
            echo $item->info();
        }
        ?>
    </body>
</html>
