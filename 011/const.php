<?php

define('MY_CONST', 'My constant value'); //KONSTANTOS NEGALIMA RASYTI IS MAZUJU RAIDZIU!!!!
define('small', 'small value'); // not recomended

define('MY_ARRAY', [
    'key' => 'value',
    'key2' => 'value2',
]);

echo MY_CONST;
echo '<br>';
echo small;
echo '<br>';
echo MY_ARRAY['key'];

function myFunction() {
    echo MY_CONST;
echo '<br>';
echo small;
echo '<br>';
echo MY_ARRAY['key'];
}

myFunction();
//php predefined constants

echo '<br><br><br>';

echo PHP_INT_MIN;

//magic constants (su sparneliais)

echo __DIR__;


