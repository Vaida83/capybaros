Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, 
o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu 
(pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 uzduotis</title>
<?php 
        if (isset($_GET['color']) ?? '') {
            $color = '#' . $_GET['color'];
        } else {
            $color = "white";
        }
?>
<br>
<body style="background-color: <?php echo $color ?>">
<a href=""></a>
    <h1>WEB mechanika 2 užduotis</h1>
    
<form action="http://localhost/capybaros/012/?z=88" method="get">
    <input type="text" name="kas">
    <input type="color" name="kitas">
    <input type="hidden" name="a" value="5">
    <button type="submit">Spalvinti</button>
</form>
</html>