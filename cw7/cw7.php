<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ćwiczenie 7 Tablice wstęp</title>
    </head>
    <pre>
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
  print_r(GenerTab(15, 3));
  ?>
    </pre>
    </body>
</html>
