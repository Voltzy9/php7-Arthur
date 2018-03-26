<?php

$AR = [
  [
    'genre' => 'Scar',
    'dégats'=> '35',
  ],
  [
    'genre' => 'M4',
    'dégats'=> '30',
  ],
  [
    'genre' => 'AK-K7',
    'dégats'=> '27',
  ],
];
$index = 0;
while (isset ($AR[$index])){
  $index++;
}
print('Les differentes AR de Fn :' );
print_r($AR);


 ?>
