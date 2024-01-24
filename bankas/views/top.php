<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>/main.css?v=<?= time() ?>"> 
    <script src="<?= URL ?>/main.js?v=<?= time() ?>" defer></script>
    <title><?= $title ??'Bankas Minutė'?></title>
</head>
<body style=" background: linear-gradient(to bottom, #6c757d, #236f4b); min-height:100vh; display: flex;
      flex-direction: column; background-image: url('<?= URL ?>/img/time-is-money.jpg');background-position: center; background-size: cover;">
