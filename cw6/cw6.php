<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ćwiczenie 6 - zasięg zmiennych</title>
    </head>
    <body>
        <h1>Zasięg zmiennych</h1>
        <pre>
        <?php
       
        $a = 45; //GLOBALNA
        var_dump($a);
        echo "a= ".$a;
        function GGG(){
            global $a;
            $b = 34; //LOKALNA
            var_dump($b);
            echo "b= ".$b;// widoczna
            echo "a= ".$a;
        }
        GGG();
        echo "b= ".$b;//nie widoczna
        if(false){
            $g=0;
            echo "g= ".$g; // widoczna
        }
        echo "g= ".$g; //nie widoczna
        ?>
        </pre>
    </body>
</html>
