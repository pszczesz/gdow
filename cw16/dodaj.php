<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Kursy</title>
        <link rel="stylesheet" href="cw16.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">NOWOCZESNE KURSY</div>
            <div id="menu">
                <ul>
                    <li><a href="cw16.php">Strona główna</a></li>
                    <li><a href="dodaj.php">Dodaj uczestnika</a></li>
                    <li><a href="usun.php">Usuń uczestnika</a></li>
                    <li><a href="">Pokaż kursy</a></li>
                </ul>
            </div>
            <div id="content">
                <form action="addUser.php" method="post">
                    <fieldset>
                        <legend>Dodawanie uczestnika</legend> 
                        <div class="line">
                            <span class="info">Imię: </span>
                            <input type="text" name="imie" id="imie" />
                            <span class="error" id="errorimie"></span>
                        </div>
                        <div class="line">
                            <span class="info">Nazwisko: </span>
                            <input type="text" name="nazwisko" id="nazwisko" />
                            <span class="error" id="errornazwisko"></span>
                        </div>                       
                        <div class="line">
                            <span class="info">Wybierz kurs: </span>
                            <?php
                            require_once 'baza.php';
                            $conn = GetConnection(MY_SRV, MY_USR, MY_PSWD, MY_DB);
                            $dane = getKursy($conn);
                            //var_dump($dane);
                            echo kursyToSelect($dane);
                            $conn->close();
                            ?>
                        </div>
                        <div class="line">
                            <span class="info"></span>
                            <input type="submit" value="Dodaj" />

                        </div>
                    </fieldset>
                </form>

            </div>
            <div id="footer">
                &copy; kursy 2016
            </div>
        </div>
    </body>
</html>
