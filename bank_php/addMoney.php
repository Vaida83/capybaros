<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] != 'logIn') {
    header('Location: http://localhost/bank_php/auth/login.php');
    exit;
}

if (!$_GET['id']) {
    header('Location: http://localhost/bank_php/index.php');
    exit;
} else if ($_GET['id']) {

    $users = json_decode(file_get_contents(__DIR__ . '/data/accounts.json'));  
    $user = null;
    foreach ($usersData as $userItem) {
        if ($userItem['id'] == $_GET['id']) {
            $user = $userItem;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="http://localhost/bank_php/script.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Pridėti pinigų</title>

</head>

<body>

    <?php require __DIR__ . '../parts/menu.php' ?>
    <?php require __DIR__ . '../parts/msg.php' ?>

    <?php if (!$user) : ?>

        <div style="text-align: center" class="alert alert-danger" role="alert">
            Member with this id not found!
            <a href=http://localhost/bank_php/index.php> Grįžti į sąskaitas </a>
        </div>
    <?php else : ?>

        <div style="text-align: center;">
            <h1>Add funds </h1>
            <p> <b>Vardas: </b> <?= $user['name'] ?> </p>
            <p> <b>Pavardė: </b> <?= $user['lastname'] ?> </p>
            <p> <b> Likutis: </b> <?= number_format($user['balance'], 3, '.', '')  ?> €.</p>
            <form action="http://localhost/bank_php/update.php?id=<?= $_GET['id'] ?? 0 ?>" method="post">
                <input type="text" pattern="\d+(\.\d+)?" name="addMoney">
                <button class="btn btn-outline-success btn-sm" type="submit">Pridėti</button>
            </form>
        </div>
    <?php endif ?>
</body>


</html>