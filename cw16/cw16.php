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
                    <li><a href="">Strona główna</a></li>
                    <li><a href="">Dodaj uczestnika</a></li>
                    <li><a href="">Usuń uczestnika</a></li>
                    <li><a href="">Pokaż kursy</a></li>
                </ul>
            </div>
            <div id="content">
                <?php
                require_once 'baza.php';
                $conn = GetConnection(MY_SRV, MY_USR, MY_PSWD, MY_DB);
                $dane = GetAllUser($conn);
                echo uczestnicyToHtmlTab($dane);
                
                ?>
            </div>
            <div id="footer">
                &copy; kursy 2016
            </div>
        </div>
    </body>
</html>
