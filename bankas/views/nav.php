<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
        <?php if ($auth) : ?>
            <a class="navbar-brand" href="<?= URL ?>/addAccount">Minutės Bankas</a>
        <?php else : ?>
            <a class="navbar-brand" href="<?= URL ?>/home">Minutės Bankas</a>
        <?php endif ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if ($auth) : ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= URL ?>/addAccount" title="Account List"><i class="fa-solid fa-list-ul"></i>Sąskaitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>/addAccount/create">Sukurti naują sąskaitą</a>
                    </li>
                <?php endif ?>
            </ul>
            <div class="d-flex">
                <?php if ($auth) : ?>
                    <div class="me-3">Sveiki, <?= $auth ?></div>
                    <form action="<?= URL ?>/logout" method="post">
                        <button class="btn btn-outline-danger" type=" submit">
                            Atsijungti
                        </button>
                    </form>
                <?php else : ?>
                    <a href="<?= URL ?>/login" class="btn btn-outline-primary">Prisijungti</a>
                <?php endif ?>
            </div>
        </div>
    </div>
</nav>
<?php require ROOT . 'views/message.php' ?>