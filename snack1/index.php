<?php
/* ## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 */
$calendario = [
      ['Milano', 'Varese', 55, 60],
      ['Lucca', 'Cagliari', 65, 83],
      ['Bergamo', 'Catania', 44, 61],
      ['Torino', 'Genova', 70, 60]
];

foreach ($calendario as $partita) {
      foreach ($partita as $key => $results) {
            echo $results . ' ';
            if ($key == count($partita) - 1) {
                  echo '<br>';
            }
      }
}
