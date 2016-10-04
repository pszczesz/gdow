<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ćwiczenie 7 Tablice wstęp</title>
    </head>
     <body>
        <h1>ćwiczenie 7 Tablice wstęp</h1>
        <?php
        $tab = [12,5,78,"ala ma kota",true];
       // var_dump($tab);
        print_r($tab);
        $tab[] = "nowy";
        print_r($tab);
        echo "tab [2]= ".$tab[2];
        $tab[4]="zmieniony";
        print_r($tab);
        ?>
      <h3>Ćwicznie własne</h3>
  <?php
  function GenerTab($rozmiar, $podzielne){
      $podzielne = $podzielne>0 ? $podzielne : -$podzielne;
      $rozmiar = $rozmiar>0 ? $rozmiar : -$rozmiar;
      $result = [];
      for($i=1;$i<=$rozmiar;$i++){
          $result[] = $i*$podzielne;
      }
      return $result;
  }
  $wynik = GenerTab(23, 3);
  print_r($wynik);
  echo "Rozmiar tablicy: ".  count($wynik);
  echo '<ul>';
  for($i=0; $i<count($wynik);$i++){
      echo "<li>{$wynik[$i]}</li>\n";
  }
  
  echo'</ul>';
  function Kolory(){
      return ["red","blue","green","black","white","grey"];
  }
  function ColorsToHtmlSelect(array $kolory){
      $html = '<select>'."\n";
      for($i=0; $i<count($kolory);$i++){
          $html .= "\t<option value='{$kolory[$i]}'"
              . ">{$kolory[$i]}</option>\n";
      }
      $html .= "</select>\n";
      return $html;
  }  
  ?>
      <h3>Użycie tablicy w select</h3>
      <?php
        $cols = Kolory();
        echo "<h5>Kolory nie posortowane</h5>\n";
        echo ColorsToHtmlSelect($cols);
        echo "<h5>Kolory posortowane</h5>\n";
        sort($cols);
        echo ColorsToHtmlSelect($cols);
      ?>
    </body>
</html>
