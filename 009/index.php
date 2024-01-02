<?php
//norint pasiziureti kaip atrodo masyvas, ji reikia print_r, bet ne echo
echo '<pre>';
$arr = ['racoon', 'rabit', 'fox'];

$arr2 = $arr;
$arr2[0] = 'dog';
array_push($arr, 'cat'); //netinka lame
$arr[] = 'cat'; // tinka cool
array_unshift($arr, 'mouse');

array_pop($arr2);
array_shift($arr2);

//NEGALIMA RASYTI
$badArray = array('racoon', 'rabit', 'fox');
//array yra primityvaus tipo, todel nera nuorodos, o yra kopija

$arr[19] = 'cow';
$arr['lauke'] = 'lape';
$arr[''] = 'lape2';

$arr[true] = true; //pasirenka skaiciu 1
$arr['1'] = '1 stringas';
$arr[false] = 'false'; //pasirenka 0
//keiciasi tik skaitiniai indeksai, neskaitiniai lieka tokie patys
//array_values resetina visu indeksus, sutvarko pagal eile
$arr4 = array_values($arr);

//print_r($arr2);
//print_r($arr);
//print_r($arr4);
echo '<br>';

//echo count($arr);

foreach ($arr as $index => $value) {
    $arr[$index] = 'kate winslet';
}

$A = 5;
$B = $A;

$A++;

 print_r($arr);

 echo '<br>';

echo $A, ' ', $B;
//& priskiria pagal nuoroda, bet ne pagal reiksme

$C = 5;
$D = &$C;

$C++;

 echo '<br>';

echo $C, ' ', $D;

$colors = ['red', 'green', 'blue', 'yellow'];

foreach ($colors as &$color) {}

unset($color); //panaikinam nuoroda i paskutini elementa

foreach ($colors as $color) {}

echo '<br>';

print_r($colors);

echo '<br>';

echo current($colors);

echo '<br>';

echo next($colors);

next($colors);
next($colors);

echo '<br>';

echo current($colors) . '<br>';
var_dump(current($colors)) . '<br>';

do {
    echo current($colors) . '<br>';
} while (next($colors));

echo '<br>';

for ($i = 1; $i < 6; $i++) {
    echo "$i <br>";
}

foreach(range(1, 5)as $i) {
    echo "$i <br>";
} 

