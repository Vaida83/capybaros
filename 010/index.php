<?php
//declare(strict_types = 1); tam, kad nebutu interpretaciju su nesvaikais skaiciais 
echo '<pre>';

function noReturn() :void {
    echo 'I have no return value.<br>';
}

$noReturnValue = noReturn();

var_dump($noReturnValue);


echo '<br>';
//galima grazinti kelis tipus
function returnInt() :int|string {
    return 1; //arba return 'aaa'
}

echo '<br>';

 $returntIntValue = returnInt();
 var_dump($returntIntValue);

$canIseeIt = 'Yes, you can see me!';

function tryToSeeMe() {
    //Per nagus uz global naudojima!!!
    global $canIseeIt;
    return $canIseeIt;
}
echo '<br>';

$tryToSeeMeValue = tryToSeeMe();

var_dump($tryToSeeMeValue);
//@ pries bet koki sakini paslepia warningus, bet taip daryrti negalima, Indiskas kodas

function sum(int $a, int $b) :int {
    return $a + $b;
}
 echo '<br>';

 $sumResult = sum(-8, 2);

 var_dump($sumResult);