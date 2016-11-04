<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Edytowanie rekordu o indeksie</h2>
        <?php
        require_once 'functions.php';
        if(isset($_GET['k'])){
            $k=$_GET['k'];
            $users = GetAllFromFile('dane.txt');
            //unset($users[$k]);
            //TODOO formularz z danymi z rekorsu o indeksie k w tab $users
           $form = <<<TEXT
              <form id="form1" method="POST" >
                <fieldset>
                    <div>
                        <span class='info'>Podaj imie:</span>
                        <input type="text" name='imie' id='imie' value='{$users[$k][0]}'/>
                        <span class='error'></span>
                    </div>
                    <div>
                        <span class='info'>Podaj nazwisko:</span>
                        <input type="text" name='nazwisko' id='nazwisko'/>
                        <span class='error'></span>
                    </div>
                    <div>
                        <span class='info'>Podaj wiek:</span>
                        <input type="number" name='wiek' id='wiek'/>
                        <span class='error'></span>
                    </div>
                    <input type="submit" value="Zapisz"/>
                </fieldset>
            </form>      
                   
TEXT;
            echo $form;            
   //         SaveToFile($users, 'dane.txt');
//            echo '<pre>';
//            var_dump($users);
//            echo '</pre>';
        }
        ?>
        <a href="cw14.html">Powrót do formularza</a><br>
            <a href="getAll.php">Wyświetl wszystkich</a>
    </body>
</html>
