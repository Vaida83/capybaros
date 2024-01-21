<?php
session_start();
require __DIR__ . '../functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="http://localhost/bank_php/parts/script.js" defer></script>
    <title>Read</title>
</head>
<body>
    <?php require __DIR__ . '../parts/menu.php' ?>
    <?php require __DIR__ . '../parts/msg.php' ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Sąskaitos</h2>
            </div>
        </div>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <b>Savininkas</b>
                    </div>
                    <div class="col-2">
                        <b>Asmens kodas</b>
                    </div>
                    <div class="col-3">
                        <b>Sąskaitos numeris</b>
                    </div>

                        <div class="col-2">
                            <b>Likutis</b>
                        </div>
                        <div class="col-3">
                            <b>Veiksmas</b>
                        </div>
                </div>
            </div>
        <?php 
        $id = $_GET['id'] ?? 0;

        $users = json_decode(file_get_contents(__DIR__ . '/data/users.json'), true);    
        $user = null;
        foreach ($users as $item) {
            if ($item['id'] == $id) {
                $users = $item;
                break;
            }
        }

    ?>
        <?php usort($users, fn ($a, $b) => $a['lastname'] <=> $b['lastname']) ?>
        <?php foreach ($users as $user) : ?>
            <li class="list-group-item">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <?= $user['name'] . " " . $user['lastname'] ?>
                        </div>
                        <div class="col-2">
                            <?= $item['personalCode'] ?>
                        </div>
                        <div class="col-3">
                            <?= $item['number'] ?>
                        </div>
                        <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'logIn') : ?>

                            <div class="col-2">
                                <?= number_format($user['balance'], 3, '.', '') ?> €
                            </div>

                        <?php endif ?>
                        </div>
                    </div>
                </div>
            </li>

        <?php endforeach ?>

    </ul>

</body>

</html>