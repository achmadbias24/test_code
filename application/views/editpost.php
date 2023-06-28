<div class="container">
    <h1>Update Post</h1>
    <form action="<?= site_url('post/update') ?>" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="<?= $post[0]['title'] ?>" required>
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <input type="text" class="form-control" name="content" value="<?= $post[0]['content'] ?>" required>
        </div>
        <input type="hidden" name="id" value="<?= $post[0]['idpost'] ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>