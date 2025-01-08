<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
<h1>Edit Post</h1>
<form action="/posts/update/<?= $post['id']; ?>" method="post">
    <label>Title</label><br>
    <input type="text" name="title" value="<?= $post['title']; ?>" required><br>
    <label>Slug</label><br>
    <input type="text" name="slug" value="<?= $post['slug']; ?>" required><br>
    <label>Content</label><br>
    <textarea name="content" required><?= $post['content']; ?></textarea><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
