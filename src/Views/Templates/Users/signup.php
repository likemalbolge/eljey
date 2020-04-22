<title><?= $title ?></title>
<div class="container gt-container">
    <div class="row justify-content-center">
        <h1>Реєстрація</h1>
    </div>
</div>

<div class="container ls-form-container">
    <form method="post">
        <div class="form-group">
            <label for="name">Ваш логін</label>
            <input type="text" class="form-control" id="name" name="name"
                   value="<?= @$data['name'] ?>" placeholder="Введіть логін">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                   value="<?= @$data['email'] ?>" placeholder="Введіть email">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password"
                   value="<?= @$data['password'] ?>" aria-describedby="passwordHelp" placeholder="Пароль">
            <small id="passwordHelp" class="form-text text-muted">Пробіли перед та після паролю будуть очищені!
                Зверніть на це увагу перед заданням паролю!</small>
        </div>
        <div class="form-group">
            <label for="allowPassword">Підтвердіть пароль</label>
            <input type="password" class="form-control" id="allowPassword" name="allowPassword"
                   value="<?= @$data['allowPassword'] ?>" placeholder="Пароль">
        </div>
        <button type="submit" class="btn btn-primary" name="do_signup">Зареєструватися</button>
    </form>
    <?= $data['alert'] ?>
</div>