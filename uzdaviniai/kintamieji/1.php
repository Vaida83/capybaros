<?php
//1.	Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus 
//ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų 
//jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
//"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
$name = 'Vaida';
$surname = 'Bebeckienė';
$birthdate = 1983;
$date = 2023;

$age = $date - $birthdate;
echo '1. ';
echo "Aš esu $name $surname. Man yra $age metai (ų).";

