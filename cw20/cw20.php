<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="cw20.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       
            <?php
            $files = scandir("katalog");
            //var_dump($files);
            echo "<ul>\n";
            foreach ($files as $file) {
                $pelna = "katalog/".$file;
                if(is_link("katalog/".$file)){
                    echo "<li><span class='nazwa'>{$file}</span>"
                    . "to jest link</li>";
                }
                if(is_file("katalog/".$file)){
                    $wykonywalny = is_executable($pelna)? " wykonywalny ":"";
                    echo "<li><span class='nazwa'>{$file}</span>:"
                    . " to jest plik o rozmiarze: <span class='wyr'>"
                        . filesize($pelna)."</span> typu: "
                            . "<span class='wyr'>". filetype($pelna)."</span>"
                            . " {$wykonywalny}</li>";
                }
                if(is_dir("katalog/".$file)){
                    echo "<li><span class='nazwa'>{$file}</span>: "
                    . "to jest katalog</li>";
                }
            }
            echo "</ul>\n";
            ?>
      
    </body>
</html>
