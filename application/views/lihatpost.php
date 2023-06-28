<div class="container">
    <h1><?= $post[0]['title'] ?></h1>
    <a href="<?= site_url('post/edit/') . $this->uri->segment('3'); ?>" class="btn btn-primary mb-3">Update</a>
    <a href="<?= site_url('post/hapus/') . $this->uri->segment('3'); ?>" class="btn btn-danger mb-3">Hapus</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">date</th>
                <th scope="col">username</th>
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
                <?php $no++;
                endforeach; ?>
            </tr>
        </tbody>
    </table>
</div>