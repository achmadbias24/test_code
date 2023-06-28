<div class="container">
    <h1>Add Post</h1>
    <form action="<?= site_url('post/add') ?>" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <textarea name="content" id="" cols="150" rows="10" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>