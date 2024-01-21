<nav style='background-color: #ffffcc; padding: 10px; color: yellow'>
  <ul style='display:flex; flex-direction:row; justify-content:right; gap:15px; list-style: none; margin: 0; padding: 0;'>
    <li>
    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == 'logIn') : ?>
      <a href='http://localhost/bank_php/index.php?name=<?= $_SESSION['name'] ?>' class="btn btn-info">
        Accounts
      </a>
    </li>
      <li>
        <a href='http://localhost/bank_php/newAccount.php?name=<?= $_SESSION['name'] ?>' class="btn btn-info">
          Add account
        </a>
      </li>
      <div style="margin-left: 150px; display:flex; flex-direction:row; gap:20px" ;>
        <span> <b>Banker name: </b> <?= $_SESSION['name'] ?> </span>
        <form action="http://localhost/bank_php/auth/logout.php" method="post">
          <button type="submit" class="btn btn-warning">Atsijungti</button>
        </form>
      </div>
    <?php endif ?>
    <?php if (!isset($_SESSION['login'])) : ?>
      <a href='http://localhost/bank_php/index.php' class="btn">Sąskaitos</a>
      <a href="http://localhost/bank_php/auth/login.php" type="submit" class="btn">Prisijungti</a>
      <a href="http://localhost/bank_php/auth/register.php" type="submit" class="btn">Registruotis</a>
    <?php endif ?>

  </ul>
</nav>