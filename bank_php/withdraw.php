<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != 'logIn') {
    header('Location: http://localhost/bank_php/auth/login.php');
    exit;
}

if ($_GET['id']?? 0) {
    $users = json_decode(file_get_contents(__DIR__ . '/data/users.json'));  
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  
    <title>Debit </title>
</head>

<body>

<?php require __DIR__ . '../parts/menu.php' ?>
<?php require __DIR__ . '../parts/msg.php' ?>



    <?php if (!$user) : ?>

        <div style="text-align: center" class="alert alert-danger" role="alert">
            Vartotojas nerastas!
            <a href=http://localhost/bank_php/index.php>Grįžti į sąskaitas </a>
        </div>

    <?php else : ?>

        <div style="text-align: center;">
            <h1>Withdraw funds</h1>
            <p> <b>Name: </b> <?= $user['name'] ?> </p>
            <p> <b>Last Name: </b> <?= $user['lastname'] ?> </p>
            <p> <b> Saskaitos likutis: </b> <?= number_format($user['balance'], 3, '.', '') ?> €.</p>
            <form action="http://localhost/bank_php/updateDebit.php?id=<?= $_GET['id'] ?? 0 ?>" method="post">
                <input type="text" pattern="\d+(\.\d+)?" name="withdraw">
                <button class="btn btn-outline-info btn-sm" type="submit">Debit money</button>
            </form>
        </div>
    <?php endif ?>
</body>


</html>