<div class="delete">
    <div class="delete-container">
        <h2>Ar tikrai norite atlikti veiksmą?</h2>
        <div>
            <form action="<?= URL ?>/addAccount/destroy/<?=$id?>" method="post">
                <button type="submit" class="btn btn-primary">Taip</button>
            </form>
            <a href="<?= URL ?>/addAccount" class="btn btn-secondary">Ne</a>
        </div>

    </div>
</div>