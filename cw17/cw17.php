<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
            <?php
            class Book {
                //pola klasy
                private $title;
                private $author;
                private $pages;
                //metody klasy
                public function Show(){
                    echo "<div>Informacje o książce: ";
                    echo "Tytuł: ".$this->title." autor: " 
                        . $this->author ." ilość stron: ".$this->pages
                         ." </div>\n";   
                }
                public function __construct($t,$a,$p) {
                    $this->title = $t;
                    $this->author = $a;
                    $this->pages = $p;
                }
                public function getTitle(){
                    return $this->title;
                }
            }
            $b1 = new Book("Ala ma kota","Tomasz Man",200);
            $b2 = new Book("Programowanie w PHP", "Antoni Trep", 230);
            //var_dump($b1);
            $b1->Show();
            $b2->Show();
            echo $b2->getTitle();
            ?>
        
    </body>
</html>
