<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Show</title>
</head>
<body>


    <?php 
        $id = $_GET['id'] ?? 0;
        $accounts = json_decode(file_get_contents(__DIR__ . '/data/accounts.json'), true);    
        $account = null;
        foreach ($accounts as $item) {
            if ($item['boxId'] == $id) {
                $account = $item;
                break;
            }
        }
    ?>

    <?php if (!$account) : ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2>Show</h2>
                    <div class="alert alert-danger" role="alert">
                        Box not found!
                    </div>
                </div>
            </div>
        </div>

    <?php else: ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2>Show</h2>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><i>Box ID:</i> <?= $account['boxId'] ?></h5>
                            <p class="card-text"><i>Mandarins amount:</i> <?= $account['amount'] ?></p>
                        
                            <a href="http://localhost/capybaros/bank/read.php" class="card-link">Show All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>

</body>
</html>