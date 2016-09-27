<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .ramka{
                border: solid thin gray;
                padding: 5px;
                width: 200px;

                display: inline-block;
            }
        </style>
    </head>
    <body>
        <h3>Funkcje - wstęp</h3>
        <?php     
       // require '...';
        require_once 'functions.php';
      //  include '...';
      //  include_once '...';
        Licz(34, 56);       
        echo Wizytowka2("Jan", "Nowak", 23);        
        echo Lista("Ala ma kotka małego", 7);
        ?>

    </body>
</html>
