<h2 style="text-align: center; margin-bottom: 50px;">Registruokites Banke</h2>
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <form action="" method="post">
            <div class="form-group">
                <label>Vardas</label>
                <input  required class="form-control" type="text" name="name" placeholder="Vardas" value="<?= isset($old_data['name']) ? $old_data['name'] : '' ?>">
            </div>
            <div class="form-group">
                <label>El.Paštas</label>
                <input  required class="form-control" type="email" name="email" value="<?= isset($old_data['email']) ? $old_data['email'] : '' ?>" placeholder="El.Paštas">
            </div>
            <div class="form-group">
                <label>Slaptažodis</label>
                <input  required class="form-control" type="password" name="password" placeholder="Slaptažodis">
            </div>
            <div class="form-group">
                <label>Pakartoti slaptažodį</label>
                <input required class="form-control" type="password" name="password2" placeholder="Pakartokite slaptažodį">
            </div>

            <button style=" margin-top: 10px" type="submit" class="btn btn-primary">Registruotis</button>
        </form>
        <span>Jau turite prisijungimą? </span> <a href='"<?= URL ?>/login/login'>Prisijungti</button>