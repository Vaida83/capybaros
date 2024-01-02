<?php
if ($)
$color = 'black';
$letters = range('A', 'J');
$random3_10 = rand(3, 10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 uzduotis</title>
</head>
<body style="background-color:<?= $color ?>; 
//< ? php echo gali buti < ? = be tarpų

<form action="" method="post">
<?php foreach (array_slice($letters, 0, $random3_10) as $letter): ?> 
<input type="checkbox" name="<?= $letter ?>" value="<?=$letter ?>">
<label style="color:skyblue;"><?= $letter ?></label>
<button type="submit">POST IT</button>
    
</body>
</html>
