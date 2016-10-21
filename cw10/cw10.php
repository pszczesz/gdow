<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw10.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="wrapper">
            <div id="header">
                NAGŁÓWEK FAJNEJ STRONY
            </div>
            <div id="menu">
                <ul>
                    <li>
                        <a href="cw10.php?index=0">Pierwsze Prawo Keplera</a>
                    </li>
                    <li>
                        <a href="cw10.php?index=1">Drugie Prawo Keplera</a>
                    </li>
                    <li>
                        <a href="cw10.php?index=2">Trzecie Prawo Keplera</a>
                    </li>


                </ul>
            </div>
            <div id="content">
                
                <?php
                require_once 'functions.php';
                 if(isset($_GET['index'])){
                     $index = intval($_GET['index']);
                 }else{
                     $index=0;
                 }
                 
                 $dane = GetContent();
                 $index = ($index<count($dane) && $index>=0)
                                   ? $index : 0;
                 echo "<p>{$dane[$index]}</p>\n";
                ?>
            </div>
        </div>
        
    </body>
</html>
