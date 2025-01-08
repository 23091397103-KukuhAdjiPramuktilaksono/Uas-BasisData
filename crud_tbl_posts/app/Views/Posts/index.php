<h1>Daftar Posts</h1>

<?php if (isset($message)): ?>
    <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px;">
        <?= $message; ?>
    </div>
<?php endif; ?>

<a href="/posts/create">Tambah Post</a>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $post['title']; ?></td>
            <td><?= $post['slug']; ?></td>
            <td>
                <a href="/posts/edit/<?= $post['id']; ?>">Edit</a>
                <a href="/posts/delete/<?= $post['id']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
