<div class="container">
    <h1>Accounts</h1>
    <a href="" class="btn btn-success mb-3">Create Account</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Name</th>
                <th scope="col">Role</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $no = 1;
                foreach ($account as $akun) : ?>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $akun['username']; ?></td>
                    <td><?= $akun['name']; ?></td>
                    <td><?= $akun['role']; ?></td>
                    <td>
                        <a href="<?= site_url('account/lihat/') . $akun['username'] ?>" class="btn btn-success">Lihat</a>
                        <a href="<?= site_url('account/edit/') . $akun['username'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= site_url('account/hapus/') . $akun['username'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                <?php $no++;
                endforeach; ?>
            </tr>
        </tbody>
    </table>
</div>