<?php 
require ROOT . 'views/nav.php' ?>
<h2 style="text-align: left; margin-bottom: 50px;"> Prašome prisijungti </h2>
    <div style="display: left; flex-direction: column; align-items:center; justify-content: center;">
        <form action="<?= URL ?>/login" method="post">
            <div class="form-group">
                <label>El.paštas</label>
                <input required type="email" name="email" class="form-control" placeholder="Įveskite el.pašto adresą">
            </div>
            <div class="form-group">
                <label>Slaptažodis</label>
                <input required type="password"  name="password" class="form-control"placeholder="Slaptažodis">
            </div>
            <button style=" margin-top: 10px" type="submit" class="btn btn-primary">Patvirtinti</button>
        </form>
    </div>

<?php require ROOT. 'views/message.php' ?>