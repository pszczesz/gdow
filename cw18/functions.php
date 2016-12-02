<?php
require_once 'uczen.php';
function StudentsToHtmlTab(array $students){
//    echo "<pre>";
//    var_dump($students);
//    echo "</pre>";
    $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th>"
            . "<th>Średnia ocen</th></tr>\n";
    $i=0;
    foreach ($students as $student) {
        $i++;
        $html .= "<tr><td>{$i}</td><td>{$student->getImie()}</td>"
            . "<td>{$student->getNazwisko()}</td> "
            . "<td>{$student->getSrOcen()}</td></tr>\n";
    }
    return $html."</table>\n";
}
function StudentsToHtmlList(array $students){
    
}
