<div class="container">
    <h1><?= $account[0]['name'] ?></h1>
    <form method="post" action="<?= site_url('account/editUser') ?>">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" value="<?= $account[0]['username'] ?>" readonly>
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" value="<?= $account[0]['name'] ?>" name="name">
        </div>
        <div>
            <label for="role">role</label>
            <input type="text" class="form-control" value="<?= $account[0]['role'] ?>" name="role">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>