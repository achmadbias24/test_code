<div class="container">
    <h1><?= $account[0]['name'] ?></h1>
    <a href="<?= site_url('Account/edit/') . $this->uri->segment('3'); ?>" class="btn btn-primary mb-3">Update</a>
    <a href="<?= site_url('Account/hapus/') . $this->uri->segment('3'); ?>" class="btn btn-danger mb-3">Hapus</a>
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
                <?php $no++;
                endforeach; ?>
            </tr>
        </tbody>
    </table>
</div>