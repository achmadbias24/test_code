<div class="container">
    <h1>Post</h1>
    <a href="#" class="btn btn-success mb-3">Create Post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Date</th>
                <th scope="col">Username</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $no = 1;
                foreach ($post as $pos) : ?>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $pos['title']; ?></td>
                    <td><?= $pos['content']; ?></td>
                    <td><?= $pos['date']; ?></td>
                    <td><?= $pos['username']; ?></td>
                    <td><a href="<?= site_url('post/lihat/') . $akun['idpost'] ?>" class="btn btn-success">Lihat</a>
                        <a href="<?= site_url('post/edit/') . $akun['idpost'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= site_url('post/hapus/') . $akun['idpost'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                <?php $no++;
                endforeach; ?>
            </tr>
        </tbody>
    </table>
</div>