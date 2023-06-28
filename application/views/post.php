<div class="container">
    <h1>Post</h1>
    <a href="<?= site_url('post/addpost') ?>" class="btn btn-success mb-3">Create Post</a>
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
            <?php $no = 1;
            foreach ($post as $pos) : ?>
                <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $pos['title']; ?></td>
                    <td><?= $pos['content']; ?></td>
                    <td><?= $pos['date']; ?></td>
                    <td><?= $pos['username']; ?></td>
                    <td><a href="<?= site_url('post/lihat/') . $pos['idpost'] ?>" class="btn btn-success">Lihat</a>
                        <a href="<?= site_url('post/edit/') . $pos['idpost'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= site_url('post/hapus/') . $pos['idpost'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>