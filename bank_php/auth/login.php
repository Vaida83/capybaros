<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == 'logIn') {
    header('Location: http://localhost/bank_php/auth/index.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newUsers = unserialize(file_get_contents(__DIR__ . '/data/newUsers.ser'));
    foreach ($newUsers as $user) {
        if ($user['email'] == $_POST['email']) {
            if ($user['password'] == sha1($_POST['password'])) { 
                $_SESSION['login'] = 'logIn'; 
                $_SESSION['name'] = $user['name'];
                header('Location: http://localhost/bank_php/auth/authorized.php');
                exit;
            }
        }
    }
    $_SESSION['error'] = 'Wrong email or password';
    header('Location: http://localhost/bank_php/auth/login.php');
    die;
}

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
    unset($_SESSION['error']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body style="background-color: skyblue; text-align:center;">
<?php require __DIR__ . '../../parts/menu.php'?>


    <?php if (isset($error)) : ?>
        <h1 style="color: red;"><?= $error ?></h1>
    <?php endif ?>

    <h2 style="text-align: center; margin-bottom: 50px;"> Welcome to Login </h2>
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <form action="" method="post">
            <div class="form-group">
                <label>Email address</label>
                <input required type="email" name="email" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input required type="password"  name="password" class="form-control"placeholder="Password">
            </div>
            <button style=" margin-top: 10px" type="submit" class="btn btn-primary">Submit</button>
        </form>
        <span>Don't have an account? </span> <a href='http://localhost/bank_php/auth/register.php'> Register</button>

    </div>

</body>

</html>