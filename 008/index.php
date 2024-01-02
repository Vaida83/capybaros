<?php
$jonas = rand(5, 25);
$petras = rand(10, 20);

echo "Jonas: $jonas Petras: $petras <br>";

if ($jonas > $petras) {
    echo 'Laimejo Jonas'; 
    } elseif($jonas < $petras) {
        echo 'Laimejo Petras';
    } else {
echo 'Lygiosios';
    }

    echo '<br>';

    $vienas = 12;
$rezultatas = 1 == $vienas ? '1' : (2 == $vienas ? '2' : 'DoNotKnow');

echo $rezultatas;

echo '<br>';

$kas = 31;

var_dump(isset($kas));

echo '<br>';

var_dump($kas2 ?? 8 == null);

echo '<br>';

for ($i = 1;$i <= 15;$i++){
    if (rand(0, 10)> 9){
        break;
    }
    echo $i;
    echo '<br>';
  }
  echo 'Ciklo pabaiga<br>';

  for($k = 1; $k <= 7; $k++) {
    switch ($k) {
        case 1:
            echo 'Vienas<br>';
            continue 2;
        case 2:
            echo 'Du<br>';
            continue 2;
        case 3:
            echo 'Trys<br>';
            continue 2;
        case 4:
            echo 'Keturi<br>';
            continue 2;
        case 5:
            echo 'Penki<br>';
            continue 2;
            default:
            echo 'Nėra<br>';
    }
  }
$k = 
  $skaicius = match($k) {
    1 => 'Vienas',
    2 => 'Du',
    3 => 'Trys',
    4 => 'Keturi',
    5 => 'Penki',
    deault => 'Nera',
  };
  