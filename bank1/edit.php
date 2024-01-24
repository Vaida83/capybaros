<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="http://localhost/capybaros/bank/app.js" defer></script>
    <title>Edit</title>
</head>
<body>

    <?php require __DIR__ . '/parts/nav.php' ?>
    <?php require __DIR__ . '/parts/msg.php' ?>

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
                    <h2>Edit</h2>
                    <div class="alert alert-danger" role="alert">
                        Account does not found!
                    </div>
                </div>
            </div>
        </div>

    <?php else: ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h2>Create</h2>
                    <div class="card">
                        <div class="card-body">
                            <form action="http://localhost/capybaros/bank/update.php?id=<?= $_GET['id'] ?? 0 ?>" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Amount: <span id="amount"></span></label>
                                    <input type="range" class="form-range" name="amount" min="0" max="1000" value="<?= $account['amount'] ?>">
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Create</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

</body>
</html>