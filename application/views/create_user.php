<div class="container">
    <h1>Create user</h1>
    <form method="post" action="<?= site_url('account/adduser') ?>">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div>
            <label for="role">role</label>
            <input type="text" class="form-control" name="role">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>