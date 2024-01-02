Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  
perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus 
ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus 
ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 uzduotis</title>
<?php 
        if (isset($_GET['color']) && $_GET['color'] ==1) {
            echo '<style>body {background-color:red}</style>';
        } else {
            echo '<style>body {background-color:black}</style>';
    
        }
?>
<br>
<a href="http://localhost/capybaros/uzdaviniai/webmechanika/1.php">Juodas</a>
    <h1>WEB mechanika 1 užduotis</h1>
    <a href="http://localhost/capybaros/uzdaviniai/webmechanika/1.php/?color=1">Raudonas</a>
</html>